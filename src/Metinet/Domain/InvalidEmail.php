<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 15:42
 */

namespace Metinet\Domain;


class InvalidEmail
{
    public static function BadEmail(): self
     {
         return new self('Bad Email');
     }
}