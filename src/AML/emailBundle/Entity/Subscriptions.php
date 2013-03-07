<?php

namespace AML\emailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscriptions
 *
 * @ORM\Table(name="Subscriptions")
 * @ORM\Entity
 */
class Subscriptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=15, nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="subscribed_at", type="datetime", nullable=false)
     */
    private $subscribedAt;

    /**
     * @var \Mailinglists
     *
     * @ORM\ManyToOne(targetEntity="Mailinglists")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="list_id", referencedColumnName="ID")
     * })
     */
    private $list;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="ID")
     * })
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
     * Set status
     *
     * @param string $status
     * @return Subscriptions
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set subscribedAt
     *
     * @param \DateTime $subscribedAt
     * @return Subscriptions
     */
    public function setSubscribedAt($subscribedAt)
    {
        $this->subscribedAt = $subscribedAt;
    
        return $this;
    }

    /**
     * Get subscribedAt
     *
     * @return \DateTime 
     */
    public function getSubscribedAt()
    {
        return $this->subscribedAt;
    }

    /**
     * Set list
     *
     * @param \AML\emailBundle\Entity\Mailinglists $list
     * @return Subscriptions
     */
    public function setList(\AML\emailBundle\Entity\Mailinglists $list = null)
    {
        $this->list = $list;
    
        return $this;
    }

    /**
     * Get list
     *
     * @return \AML\emailBundle\Entity\Mailinglists 
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Set user
     *
     * @param \AML\emailBundle\Entity\Users $user
     * @return Subscriptions
     */
    public function setUser(\AML\emailBundle\Entity\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \AML\emailBundle\Entity\Users 
     */
    public function getUser()
    {
        return $this->user;
    }
}