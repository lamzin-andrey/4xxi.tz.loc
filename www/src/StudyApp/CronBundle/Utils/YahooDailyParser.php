<?php
namespace StudyApp\CronBundle\Utils;

use StudyApp\CronBundle\Utils\CurlRequest;
use Symfony\Component\Config\Definition\Exception\Exception;
use StudyApp\StudyAppBundle\Entity\Statistic;
use StudyApp\CronBundle\Utils\YahooParser;

class YahooDailyParser extends YahooParser{
    private $_interval = 604800;//week
    private $_start_point;

    protected function _getStartPoint() {
        if (!$this->_start_point) {
            $this->_start_point = date('Y-m-d H:i:s');
        }
        $point_b = $this->_dt2stamp($this->_start_point);
        return $point_b;
    }

    protected function _getEndPoint($point_b) {
        return ($point_b - $this->_interval);
    }
}
