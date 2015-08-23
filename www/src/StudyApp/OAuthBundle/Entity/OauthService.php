<?php

namespace StudyApp\OAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthService
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class OauthService
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
     * @var string
     *
     * @ORM\Column(name="string_id", type="string", length=32)
     */
    private $string_id;


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
     * Set string_id
     *
     * @param string $stringId
     * @return OauthService
     */
    public function setStringId($stringId)
    {
        $this->string_id = $stringId;

        return $this;
    }

    /**
     * Get string_id
     *
     * @return string 
     */
    public function getStringId()
    {
        return $this->string_id;
    }
}
