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

    public static function fromString(string $dateOfEvent): self
    {
        return new self($dateOfEvent);
    }

    public function toAge(): int
    {
        return (new \DateTimeImmutable('now'))->diff($this->dateOfEvent)->y;
    }

    private function __construct(string $dateOfEvent)
    {
        $dateOfEventAsDateTime = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', sprintf('%s 23:59:59', $dateOfEvent));
        if ($dateOfEventAsDateTime > new \DateTimeImmutable('now')) {

            throw InvalidDateOfEvent::mustNotBeInTheFuture();
        }

        $this->dateOfEvent = $dateOfEventAsDateTime;
    }
}