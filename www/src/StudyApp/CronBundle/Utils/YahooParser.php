<?php
namespace StudyApp\CronBundle\Utils;
//require_once dirname(__FILE__) . '/Request.php';
use StudyApp\CronBundle\Utils\CurlRequest;
use Symfony\Component\Config\Definition\Exception\Exception;
use StudyApp\StudyAppBundle\Entity\Statistic;

class YahooParser {
    const START_POINT = '2015-08-21 22:27:00';
    const STOP_POINT = '2013-08-21 22:27:00';
    const INTERVAL = 125798400;
    /** @var int id  идентификатор фирмы, корпорации и т п*/
    protected $firm_id;
    /** @var string start_url url страницы с чаротм статистики*/
    protected $start_url;
    /** @var string request_tpl Шаблон запроса данных статистики к серверу*/
    protected $request_tpl;
    /** @var string remote_offset_file путь к временному файлу, в котором хранится временная метка, для которой уже полученны данные*/
    protected $remote_offset_file;
    /** @var string last_timestamp последняя времиенная метка ддля которой полученны данные с yahoo*/
    protected $last_timestamp;
    /** @var string идентификатор фирмы в url*/
    protected $str_firm_id;
    /** @var EntityManager иенеджер для работы с записями статистики*/
    protected $em;
    /** @var Repository репозиторий статистики*/
    protected $repository;

    /**
     * @param int $firm_id         - Идентификатор фирмы, корпорации и т п в приложении
     * @param string $start_url    - url страницы с чаротм статистики
     * @param string $request_tpl  - @see $this->request_tpl
     * @param $doctrine  - экземпляр Doctrine из контекста контроллера
    */
    public function __construct($firm_id, $start_url, $request_tpl, $doctrine) {
        $this->firm_id = $firm_id;
        $this->start_url = $start_url;
        $this->request_tpl = $request_tpl;
        $this->em = $doctrine->getEntityManager();
        $this->repository = $doctrine->getRepository("StudyAppStudyAppBundle:Statistic");
    }
    /**
     * @param $str_firm_id  - string id for corp. example: APPL
    */
    public function run($str_firm_id) {
        $this->start_url = str_replace('{FIRM_ID}', $str_firm_id, $this->start_url);
        $this->str_firm_id = $str_firm_id;
        $req = new CurlRequest();
        $response = $req->execute($this->start_url, [], 'https:/google.ru', $proc);
        if ($response->responseStatus != 200) {
            throw new Exception('fail get initial page ' . print_r($response->responseStatus, 1) . ' | ' . $response->responseText);
        }
        $this->remote_offset_file = dirname(__FILE__) . '/tmp/' . $this->firm_id . '.offset';
        while (true) {
            if (!$this->_process($req)) {
                break;
            }
        }
    }
    /**
     * Процесс получения данных с finance.yahoo
     * @param CurlRequest $req
     * @return bool false если получены все поставленные в задаче данные (от START_POINT до STOP_POINT)
    */
    protected function _process($req) {
        $remote_offset_file = $this->remote_offset_file;
        $point_b = $this->_getStartPoint();
        $stop_point = $this->_dt2stamp(self::STOP_POINT);
        if ($point_b < $stop_point) {
            echo "Complete!\n";
            return false;
        }

        $point_a = $this->_getEndPoint($point_b);

        $sql = "SELECT s._timestamp FROM StudyAppStudyAppBundle:Statistic As s WHERE s.firm_id = {$this->firm_id} AND s._timestamp <= '{$point_b}'";
        $check = 0;
        try {
            $a_result = $this->em->createQuery($sql)->setMaxResults(1)->getSingleResult();
            $check = isset($a_result['_timestamp']) ? $a_result['_timestamp'] : 0;
        } catch (\Doctrine\ORM\NoResultException $E) {
            ;
        }
        if ($check) {
            echo "Complete!\n";
            return false;
        }

        $data_file = dirname(__FILE__) . '/tmp/' . $point_a . '-' . $point_b . '.' . $this->firm_id . '.data';
        $period_data = $this->_getPeriodData($req, $point_a, $point_b, $data_file);
        $has_timestamps = isset($period_data['chart']['result'][0]['timestamp']) && is_array($period_data['chart']['result'][0]['timestamp']);
        $quote      = isset($period_data['chart']['result'][0]['indicators']['quote'][0]) ? $period_data['chart']['result'][0]['indicators']['quote'][0] : false;
        if ($quote) {
            $has_volume = isset($quote['volume']) && is_array($quote['volume']);
            $has_high = isset($quote['high']) && is_array($quote['high']);
            $has_low = isset($quote['low']) && is_array($quote['low']);
            $has_open = isset($quote['open']) && is_array($quote['open']);
            $has_close = isset($quote['close']) && is_array($quote['close']);
        }
        if ($has_timestamps && $has_volume && $has_high && $has_low && $has_open && $has_close){
            $this->_savePeriodData($period_data['chart']['result'][0]['timestamp'],
                $quote['volume'],
                $quote['high'],
                $quote['low'],
                $quote['open'],
                $quote['close']
            );
        } else {
            throw new Exception("unexpected data!" . (isset($period_data['chart']['error']) ? ' ' . $period_data['chart']['error'] : '') );
        }
        file_put_contents($remote_offset_file, $point_a);
        return true;
    }
    /**
     * Сохраняет полученные с finance.yahoo данные за период в БД
     * @param array $timestamp  - массив с временными метками для которых есть данные
     * @param array $volume     - массив со значениями стоимости акций (????)
     * @param array $high       - массив со значениями максимальной стоимости акций
     * @param array $low        - массив со значениями минимальной стоимости акций
     * @param array $open       - массив со временем открытия торгов
     * @param array $close      - массив со временем закрытия торгов
     */
    protected function _savePeriodData($timestamp, $volume, $high, $low, $open, $close) {
        $L = count($timestamp);
        for ($i = 0; $i < $L; $i++) {
            $data = array(
                'volume' => $volume[$i],
                'high' => $high[$i],
                'low' => $low[$i],
                'open' => $open[$i],
                'close' => $close[$i]
            );
            $data = json_encode($data);

            /*$stat = new Statistic();
            $stat->setFirmId($this->firm_id);
            $stat->setTimestamp($timestamp[$i]);
            $stat->setChart($data);
            $this->em->persist($stat);*/

            //TODO remove comment
            $sql = "INSERT INTO statistic
				(firm_id, _timestamp, chart) VALUES
				('{$this->firm_id}', '{$timestamp[$i]}', '{$data}') ON DUPLICATE KEY UPDATE chart = chart";

            $this->em->getConnection()->prepare($sql)->execute();
        }
        //$this->em->flush();
    }
    /**
     * Имитирует ajax запрос к finance.yahoo.com для получения данных статистики за период
     * @param CurlRequest $req  - экземпляр CurlRequest
     * @param integer $point_a  - левая граница временного интервала
     * @param integer $point_b  - правая граница временного интервала
     * @param string $data_file - файл в котором могут быть кэшированы данные запроса, чтобы не выполнять его повторно (может быть полезно в случае аварийного завершения процесса)
    */
    protected function _getPeriodData($req, $point_a, $point_b, $data_file) {
        if (file_exists($data_file)) {
            $data = file_get_contents($data_file);
            $data = json_decode($data, true);
            if (!$data) {
                unlink(($data_file));
            } else {
                return $data;
            }
        }
        $url = $this->request_tpl;
        $url = str_replace('{FIRM_ID}', $this->str_firm_id, $url);
        $url = str_replace('{STAMP_B}', $point_b, $url);
        $url = str_replace('{STAMP_A}', $point_a, $url);

        $response = $req->execute($url, [], $this->start_url, $proc);
        if ($response->responseStatus != 200) {
            throw new Exception('fail get data for ' . $point_a . ' - ' . $point_b);
        }
        file_put_contents($data_file, $response->responseText);
        $data = json_decode($response->responseText, true);
        if (!$data) {
            throw new Exception('Invalid data from remote server, HSON format expected!');
        }
        return $data;
    }

    protected function _stamp2dt($timestamp) {
        @date_default_timezone_set('Europe/Moscow');
        return date('Y-m-d H:i:s', $timestamp);
    }
    /**
     * Datetime to Timestamp
     * @param string $datetime 'Y-m-d H:i:s'
     * @return int
    */
    protected function _dt2stamp($datetime) {
        @date_default_timezone_set('Europe/Moscow');
        return strtotime($datetime);
    }
    /**
     * Возвращает правую (большую) границу временного интервала, от которого должно быть продолжено получение данных
     * @return integer
    */
    protected function _getStartPoint() {
        $point_b = $this->_getOffset($this->remote_offset_file);
        if (!$point_b) {
            $point_b = $this->_dt2stamp(self::START_POINT);
        }
        return $point_b;
    }
    /**
     * Возвращает левую (меньшую) границу временного интервала, до которого должно быть продолжено получение данных
     * @return integer
    */
    protected function _getEndPoint($point_b) {
        return ($point_b - self::INTERVAL);
    }
    /**
     * @param string $state_file файл в котором нужно сохранить оффсет
     * @return int содержимое в файле $state_file приведенное к целому числу
     */
    private function _getOffset($state_file)
    {
        $n = 0;
        if (file_exists($state_file)) {
            $n = (int)file_get_contents($state_file);
        } else {
            file_put_contents($state_file, '0');
        }
        return $n;
    }
}
