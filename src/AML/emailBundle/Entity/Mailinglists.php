<?php

namespace AML\emailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mailinglists
 *
 * @ORM\Table(name="MailingLists")
 * @ORM\Entity
 */
class Mailinglists
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
     * @ORM\Column(name="source_blog", type="string", length=1000, nullable=false)
     */
    private $sourceBlog;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_start", type="datetime", nullable=false)
     */
    private $lastStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_end", type="datetime", nullable=false)
     */
    private $lastEnd;



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
     * Set sourceBlog
     *
     * @param string $sourceBlog
     * @return Mailinglists
     */
    public function setSourceBlog($sourceBlog)
    {
        $this->sourceBlog = $sourceBlog;
    
        return $this;
    }

    /**
     * Get sourceBlog
     *
     * @return string 
     */
    public function getSourceBlog()
    {
        return $this->sourceBlog;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Mailinglists
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set lastStart
     *
     * @param \DateTime $lastStart
     * @return Mailinglists
     */
    public function setLastStart($lastStart)
    {
        $this->lastStart = $lastStart;
    
        return $this;
    }

    /**
     * Get lastStart
     *
     * @return \DateTime 
     */
    public function getLastStart()
    {
        return $this->lastStart;
    }

    /**
     * Set lastEnd
     *
     * @param \DateTime $lastEnd
     * @return Mailinglists
     */
    public function setLastEnd($lastEnd)
    {
        $this->lastEnd = $lastEnd;
    
        return $this;
    }

    /**
     * Get lastEnd
     *
     * @return \DateTime 
     */
    public function getLastEnd()
    {
        return $this->lastEnd;
    }
}
