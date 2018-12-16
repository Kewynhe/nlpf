<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="responses")
 */
class Response
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
    protected $id;

    /**
     * @Column(type="boolean")
     * @var boolean
     */
    protected $accepted;

    /**
     * @Column(type="datetime")
     * @var datetime
     */
    protected $date;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $justification;

    /**
     * @Column(type="boolean")
     * @var boolean
     */
    protected $notif;

    /**
     * @OneToOne(targetEntity="Ticket", inversedBy="response")
     * @JoinColumn(name="ticket_id", referencedColumnName="id")
     */
    protected $ticket;


    public function getId()
    {
        return $this->id;
    }

    public function getAccepted()
    {
        return $this->accepted;
    }

    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getJustification()
    {
        return $this->justification;
    }

    public function setJustification($justification)
    {
        $this->justification = $justification;
    }

    public function getNotif()
    {
        return $this->notif;
    }

    public function setNotif($notif)
    {
        $this->notif = $notif;
    }

    public function getTicket()
    {
        return $this->ticket;
    }

    public function setTicket($ticket)
    {
        $ticket->setResponse($this);
        $this->ticket = $ticket;
    }
}
