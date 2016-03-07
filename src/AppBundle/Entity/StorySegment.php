<?php
// src/AppBundle/Entity/StorySegment.php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="story_segments")
 */
class StorySegment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="StorySegmentType")
     */
    protected $type;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $text;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $src;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $alt;
    
    /**
     * @ORM\Column(type="integer", options={"default":1})
     */
    protected $status;
    
    public function __construct()
    {
        parent::__construct();
        // custom logic
    }
}
