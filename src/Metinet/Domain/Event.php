<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:23
 */

namespace Metinet\Domain;


class Event
{
    private $title;
    private $description;
    private $goal;
    private $dateOfEvent;
    private $isPrivate;
    private $cost;
    private $participants;

    /**
     * Event constructor.
     * @param $title
     * @param $description
     * @param $goal
     * @param $dateOfEvent
     * @param $isPrivate
     * @param $cost
     */
    public function __construct(string $title, string $description, string $goal, \DateTime $dateOfEvent, bool $isPrivate, int $cost)
    {
        $this->title = $title;
        $this->description = $description;
        $this->goal = $goal;
        $this->dateOfEvent = $dateOfEvent;
        $this->isPrivate = $isPrivate;
        $this->cost = $cost;
    }

    public function isPrivateEvent() :bool {
        return $this->isPrivate;
    }
    public function addParticipant(User $participant){
        $this->participants[] = $participant;
    }

}
