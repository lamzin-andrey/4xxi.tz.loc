<?php

namespace StudyApp\StudyAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionsPortfel
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ActionsPortfel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="firm_id", type="integer")
     */
    private $firm_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * @var string
     *
     * @ORM\Column(name="system_name", type="string", length=255)
     */
    private $system_name;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="StudyApp\UserBundle\Entity\User", inversedBy="actions")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firm_id
     *
     * @param integer $firmId
     * @return ActionsPortfel
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
     * Set user_id
     *
     * @param integer $userId
     * @return ActionsPortfel
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set system_name
     *
     * @param string $systemName
     * @return ActionsPortfel
     */
    public function setSystemName($systemName)
    {
        $this->system_name = $systemName;

        return $this;
    }

    /**
     * Get system_name
     *
     * @return string 
     */
    public function getSystemName()
    {
        return $this->system_name;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return ActionsPortfel
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Set user
     *
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}
