<?php
// src/AppBundle/Entity/StorySegmentType.php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="story_segment_types")
 */
class StorySegmentType
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=70)
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $description;
    
    public function __construct()
    {
        parent::__construct();
        // custom logic
    }
}
