<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:37
 */

namespace Metinet\Domain;


class Room
{
    private $nameRoom;
    private $numbersPersonAllowed;

    /**
     * Room constructor.
     * @param $nameRoom
     * @param $numbersPersonAllowed
     */
    public function __construct(string $nameRoom, int $numbersPersonAllowed)
    {
        $this->nameRoom = $nameRoom;
        $this->numbersPersonAllowed = $numbersPersonAllowed;
    }

    public function getPersonMax() :int
    {
        return $this->nameRoom->getNumbersPersonAllowed();
    }

    /**
     * @return mixed
     */
    public function getNameRoom()
    {
        return $this->nameRoom;
    }

    /**
     * @param mixed $nameRoom
     */
    public function setNameRoom($nameRoom): void
    {
        $this->nameRoom = $nameRoom;
    }

    /**
     * @return mixed
     */
    public function getNumbersPersonAllowed()
    {
        return $this->numbersPersonAllowed;
    }

    /**
     * @param mixed $numbersPersonAllowed
     */
    public function setNumbersPersonAllowed($numbersPersonAllowed): void
    {
        $this->numbersPersonAllowed = $numbersPersonAllowed;
    }



}