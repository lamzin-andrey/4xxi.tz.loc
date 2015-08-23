<?php

namespace StudyApp\StudyAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistic
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Statistic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="firm_id", type="integer")
     * @ORM\Id @ORM\Column(type="integer")
     */
    private $firm_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="_timestamp", type="integer")
     * @ORM\Id @ORM\Column(type="integer")
     */
    private $_timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="chart", type="string", length=512)
     */
    private $chart;


    /**
     * Get id
     *
     * @return array('firm_id' => int, '_timestamp' => int)
     */
    public function getId()
    {
        return array('firm_id' => $this->id, '_timestamp' => $this->_timestamp);
    }

    /**
     * Set firm_id
     *
     * @param integer $firmId
     * @return Statistic
     */
    public function setFirmId($firmId)
    {
        $this->firm_id = $firmId;

        return $this;
    }

    /**
     * Get firm_id
     *
     * @return integer 
     */
    public function getFirmId()
    {
        return $this->firm_id;
    }

    /**
     * Set _timestamp
     *
     * @param integer $timestamp
     * @return Statistic
     */
    public function setTimestamp($timestamp)
    {
        $this->_timestamp = $timestamp;

        return $this;
    }

    /**
     * Get _timestamp
     *
     * @return integer 
     */
    public function getTimestamp()
    {
        return $this->_timestamp;
    }

    /**
     * Set chart
     *
     * @param string $chart
     * @return Statistic
     */
    public function setChart($chart)
    {
        $this->chart = $chart;

        return $this;
    }

    /**
     * Get chart
     *
     * @return string 
     */
    public function getChart()
    {
        return $this->chart;
    }
}
