<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 23.08.2015
 * Time: 16:20
 */

namespace Users\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;
    /** @ORM\Column(type="string") */
    protected $login;
    /** @ORM\Column(type="string") */
    protected $pasword_hash;
    /** @ORM\Column(type="string") */
    protected $name;
    /** @ORM\Column(type="string") */
    protected $s_name;
    /** @ORM\Column(type="date") */
    protected $b_date;
    /** @ORM\Column(type="string") */
    protected $image;
    /** @ORM\Column(type="string") */
    protected $sex;
    /** @ORM\Column(type="boolean") */
    protected $administrator_flag;
    /** @ORM\Column(type="string") */
    protected $email;

}