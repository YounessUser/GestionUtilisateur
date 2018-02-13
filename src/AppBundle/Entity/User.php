<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * Created by PhpStorm.
 * User: youness
 * Date: 2018-02-13
 * Time: 10:34 AM
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string" ,nullable=true)
     */
    private $firstname;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $lastname;

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }



    public function getId()
    {
        return $this->id;
    }

}