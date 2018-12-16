<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="tickets")
 */
class Ticket
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
    protected $photo;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $etage;

    /**
     * @Column(type="integer")
     * @var int (ENUM(16))
     */
    protected $orientation;

    /**
     * @Column(type="string")
     * @var string (ENUM(4))
     */
    protected $state;

    /**
     * @OneToMany(targetEntity="User", inversedBy="tickets")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @OneToMany(targetEntity="Building", inversedBy="tickets")
     * @JoinColumn(name="building_id", referencedColumnName="id")
     */
    protected $building;

    /**
     * @OneToOne(targetEntity="Response", mappedBy="ticket")
     */
    protected $response;


    public function getId()
    {
        return $this->id;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getEtage()
    {
        return $this->etage;
    }

    public function setEtage($etage)
    {
        $this->etage = $etage;
    }

    public function getOrientation()
    {
        return $this->orientation;
    }

    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $user->addTicket($this);
        $this->user = $user;
    }

    public function getBuilding()
    {
        return $this->building;
    }

    public function setBuilding($building)
    {
        $building->addTicket($this);
        $this->building = $building;
    }

    public function setResponse($response)
    {
        $this->response = $response;
    }
}
