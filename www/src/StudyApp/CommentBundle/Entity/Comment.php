<?php

namespace StudyApp\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Events;

use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Mapping\PreUpdate;
use Symfony\Component\Validator\Constraints as Assert;
use StudyApp\UserBundle\Entity\User;

/**
 * Comment
 * @HasLifecycleCallbacks
 * @ORM\Table(indexes={@ORM\Index(name="resource_url_idx", columns={"resource_url"})})
 * @ORM\Entity
 */
class Comment
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
     * @ORM\Column(name="body", type="text")
     * @Assert\NotBlank(message="Need text")
     */
    private $body;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * @var string
     *
     * @ORM\Column(name="created_at", type="string", length=128)
     */
    private $created_at;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_at", type="string", length=128)
     */
    private $updated_at;
    
    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=1024)
     */
    private $path;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer")
     */
    private $parent_id;
    /**
     * @var integer
     *
     * @ORM\Column(name="resource_url", type="string", length=4096, nullable=true)
     */
    private $resource_url;
    
    /**
     * @ORM\ManyToOne(targetEntity="StudyApp\UserBundle\Entity\User", inversedBy="comments")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    /**
     * @var integer
     *
     * @ORM\Column(name="count_child", type="integer")
     */
    private $count_child = 0;

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
     * Set id
     *
     * @param int $id
     * @return Comment
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Set body
     *
     * @param string $body
     * @return Comment
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return Comment
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
     * Set created_at
     *
     * @param string $createdAt
     * @return Comment
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return string false;//
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param string $updatedAt
     * @return Comment
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return string 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    
    /**
     * Set date create
     * @PrePersist
     */
    public function initCreatedAt()
    {
        $this->updated_at = $this->created_at = date('Y-m-d H:i:s');
        
    }
    /**
     * Set date modify
     * @PreUpdate
     */
    public function preUpdate(PreUpdateEventArgs $event)
    {
    	if ($event->hasChangedField('body')) {
    		$this->updated_at = date('Y-m-d H:i:s');
    	}
    }
    
    /**
     * Set path
     *
     * @param string $path
     * @return Comment
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * Set parent_id
     *
     * @param integer $parent_id
     * @return Comment
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;

        return $this;
    }

    /**
     * Get parent_id
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parent_id;
    }
    /**
     * Set resource url
     *
     * @param string $resource_url
     * @return Comment
     */
    public function setResourceUrl($resource_url)
    {
        $this->resource_url = $resource_url;

        return $this;
    }

    /**
     * Get resource url
     *
     * @return string 
     */
    public function getResourceUrl()
    {
        return $this->resource_url;
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
    /**
     * Set count child
     *
     * @param Integer $count
     */
    public function setCountChild($count)
    {
        $this->count_child = $count;

        return $this;
    }
    /**
     * Get count child
     *
     * @return count_child
     */
    public function getCountChild()
    {
        return $this->count_child;
    }
    /**
     * Get fields as Aeray
     *
     * @return array
     */
    public function asArray() {
        $fields = get_class_vars(get_class($this));
        $data = array();
        foreach($fields as $field => $v) {
            if ($field != 'user') {
                $data[$field] = $this->$field;
            } else {
                $userInfo = array();
                $userInfo['id'] = $this->user->getId();
                $userInfo['first_name'] = $this->user->getFirstName();
                $userInfo['last_name'] = $this->user->getLastName();
                $userInfo['username'] = $this->user->getUsername();
                $data[$field] = $userInfo;
            }
        }
        return $data;
    }
}
