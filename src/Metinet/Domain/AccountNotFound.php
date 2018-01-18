<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:49
 */

namespace Metinet\Domain;

use Metinet\Domain\Account;

class AccountNotFound extends  \Exception
{
    public function __construct($mail)
    {
         parent::__construct(sprintf('Account with username "%s" not found.', $mail));
    }
}