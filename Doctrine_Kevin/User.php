<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="users")
 */
class User
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
    protected $id;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $firstname;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $lastname;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $phone;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $mail;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $address;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $password;

    /**
     * @Column(type="boolean")
     * @var boolean
     */
    protected $admin;

    /**
     * @Column(type="boolean")
     * @var boolean
     */
    protected $blacklist;

    /**
     * @OneToMany(targetEntity="Building", mappedBy="user")
     */
    protected $buildings;

    /**
     * @OneToMany(targetEntity="Ticket", mappedBy="user")
     */
    protected $tickets;


    public function __construct()
    {
        $this->buildings = new ArrayCollection();
        $this->tickets = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($name)
    {
        $this->phone = $phone;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getAdmin()
    {
        return $this->admin;
    }

    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    public function getBlacklist()
    {
        return $this->blacklist;
    }

    public function setBlacklist($blacklist)
    {
        $this->blacklist = $blacklist;
    }

    public function addBuilding($building)
    {
        $this->buildings[] = $building;
    }

    public function addTicket($ticket)
    {
        $this->tickets[] = $ticket;
    }
}
