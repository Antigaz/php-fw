<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:07
 */

namespace Metinet\Domain;


class DateOfEvent
{
    private $dateOfEvent;

    /**
     * DateOfEvent constructor.
     * @param \DateTime $dateOfEvent
     * @param \DateTimeInterface $duration
     */
    private function __construct(\DateTime $dateOfEvent, \DateTimeInterface $duration)
     {
         if($dateOfEvent > new \DateTime()) {
             throw InvalidDateOfEvent::mustNotBeInThePast();
         }

        $this->dateOfEvent = $dateOfEvent;
    }

     public static function fromString(string $dateOfEvent): self
     {
            return new self(new \DateTime($dateOfEvent));
     }

     public static function fromDateTime(\DateTime $dateOfEvent): self
     {
            return new self($dateOfEvent);
     }
}