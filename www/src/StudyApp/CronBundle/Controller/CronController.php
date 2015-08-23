<?php
namespace StudyApp\CronBundle\Controller;
use StudyApp\CronBundle\Utils\YahooDailyParser;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use StudyApp\CronBundle\Utils\YahooParser;

class CronController extends Controller {
    public function __construct() {
        /*             проверяем что контроллер вызывается из скрипта а не через http-запрос,
         *             вместо 'cron_script.php' подставьте имя файла скрипта который будет запускаться
         *             через cron
        */
        if (basename($_SERVER["SCRIPT_NAME"]) != "cron_script.php") {
            print("disallowed");
            exit( $_SERVER["SCRIPT_NAME"] );
        }
    }
    /**
     * @Route("/cron")
     */
    public function cronAction() {
        /* Получаем статистику */
        $doctrine = $this->getDoctrine();

        $start_url = 'http://finance.yahoo.com/echarts?s={FIRM_ID}#{%22allowChartStacking%22:true}';
        $tpl_url = 'https://finance-yql.media.yahoo.com/v7/finance/chart/{FIRM_ID}?period2={STAMP_B}&period1={STAMP_A}&interval=1d&indicators=quote&includeTimestamps=true&includePrePost=true&events=div%7Csplit%7Cearn&corsDomain=finance.yahoo.com';

        $p = new YahooParser(2, $start_url, $tpl_url, $doctrine);
        $p->run('MSFT');

        $p = new YahooParser(1, $start_url, $tpl_url, $doctrine);
        $p->run('APPL');

        $p = new YahooParser(3, $start_url, $tpl_url, $doctrine);
        $p->run('FB');

        $p = new YahooParser(4, $start_url, $tpl_url, $doctrine);
        $p->run('GE');

        $p = new YahooParser(5, $start_url, $tpl_url, $doctrine);
        $p->run('CSCO');

        //Добираем новые данные
        $p = new YahooDailyParser(2, $start_url, $tpl_url, $doctrine);
        $p->run('MSFT');

        $p = new YahooDailyParser(1, $start_url, $tpl_url, $doctrine);
        $p->run('APPL');

        $p = new YahooDailyParser(3, $start_url, $tpl_url, $doctrine);
        $p->run('FB');

        $p = new YahooDailyParser(4, $start_url, $tpl_url, $doctrine);
        $p->run('GE');

        $p = new YahooDailyParser(5, $start_url, $tpl_url, $doctrine);
        $p->run('CSCO');

        // чтобы не было ошибки
        return new Response('');
    }
}