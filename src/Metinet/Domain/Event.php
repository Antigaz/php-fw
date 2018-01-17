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
    private $numbersPersonAllowed;
    private $day;
    private $nameRoom;
    private $adress;
    private $typeEvent;
    private $cost;

    /**
     * Event constructor.
     * @param $title
     * @param $description
     * @param $goal
     * @param $numbersPersonAllowed
     * @param $day
     * @param $timeSlot
     * @param $nameRoom
     * @param $adress
     * @param $typeEvent
     * @param $cost
     */
    public function __construct(string $title, string $description, string $goal, int $numbersPersonAllowed, Date $day, string $nameRoom, string $adress, string $typeEvent, int $cost)
    {
        $this->title = $title;
        $this->description = $description;
        $this->goal = $goal;
        $this->numbersPersonAllowed = $numbersPersonAllowed;
        $this->day = $day;
        $this->nameRoom = $nameRoom;
        $this->adress = $adress;
        $this->typeEvent = $typeEvent;
        $this->cost = $cost;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getGoal(): string
    {
        return $this->goal;
    }

    /**
     * @param string $goal
     */
    public function setGoal(string $goal): void
    {
        $this->goal = $goal;
    }

    /**
     * @return int
     */
    public function getNumbersPersonAllowed(): int
    {
        return $this->numbersPersonAllowed;
    }

    /**
     * @param int $numbersPersonAllowed
     */
    public function setNumbersPersonAllowed(int $numbersPersonAllowed): void
    {
        $this->numbersPersonAllowed = $numbersPersonAllowed;
    }

    /**
     * @return Date
     */
    public function getDay(): Date
    {
        return $this->day;
    }

    /**
     * @param Date $day
     */
    public function setDay(Date $day): void
    {
        $this->day = $day;
    }

    /**
     * @return string
     */
    public function getNameRoom(): string
    {
        return $this->nameRoom;
    }

    /**
     * @param string $nameRoom
     */
    public function setNameRoom(string $nameRoom): void
    {
        $this->nameRoom = $nameRoom;
    }

    /**
     * @return string
     */
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     */
    public function setAdress(string $adress): void
    {
        $this->adress = $adress;
    }

    /**
     * @return string
     */
    public function getTypeEvent(): string
    {
        return $this->typeEvent;
    }

    /**
     * @param string $typeEvent
     */
    public function setTypeEvent(string $typeEvent): void
    {
        $this->typeEvent = $typeEvent;
    }

    /**
     * @return int
     */
    public function getCost(): int
    {
        return $this->cost;
    }

    /**
     * @param int $cost
     */
    public function setCost(int $cost): void
    {
        $this->cost = $cost;
    }



}
