<?php

namespace StudyApp\OAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthUser
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class OauthUser
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
     * @ORM\Column(name="oauth_service_id", type="integer")
     */
    private $oauth_service_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * @var string
     *
     * @ORM\Column(name="oauth_service_user_id", type="string", length=218)
     */
    private $oauth_service_user_id;


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
     * Set oauth_service_id
     *
     * @param integer $oauthServiceId
     * @return OauthUser
     */
    public function setOauthServiceId($oauthServiceId)
    {
        $this->oauth_service_id = $oauthServiceId;

        return $this;
    }

    /**
     * Get oauth_service_id
     *
     * @return integer 
     */
    public function getOauthServiceId()
    {
        return $this->oauth_service_id;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return OauthUser
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
     * Set oauth_service_user_id
     *
     * @param string $oauthServiceUserId
     * @return OauthUser
     */
    public function setOauthServiceUserId($oauthServiceUserId)
    {
        $this->oauth_service_user_id = $oauthServiceUserId;

        return $this;
    }

    /**
     * Get oauth_service_user_id
     *
     * @return string 
     */
    public function getOauthServiceUserId()
    {
        return $this->oauth_service_user_id;
    }
}
