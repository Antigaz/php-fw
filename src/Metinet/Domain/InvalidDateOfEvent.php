<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:07
 */

namespace Metinet\Domain;


class InvalidDateOfEvent
{
    public static function mustNotBeInTheFuture(): self
    {
        return new self('Date Of Event cannot be in the future');
    }
}