<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(length=30, nullable=true)
     */
    protected $firstName;
    
    /**
     * @ORM\Column(length=30, nullable=true)
     */
    protected $lastName;
    
    public function __construct()
    {
        parent::__construct();
        // custom logic
    }
}
