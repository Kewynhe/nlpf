<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="buildings")
 */
class Building
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
    protected $address;

    /**
     * @OneToMany(targetEntity="User", inversedBy="buildings")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @OneToMany(targetEntity="Ticket", mappedBy="building")
     */
    protected $tickets;


    public function __construct()
    {
        $this->tickets = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $user->addBuilding($this);
        $this->user = $user;
    }

    public function addTicket($ticket)
    {
        $this->tickets[] = $ticket;
    }
}
