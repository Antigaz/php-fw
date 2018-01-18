<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:19
 */

namespace Metinet\Domain;

class AccountRepository
{
    private $accounts = [];
    public function __construct(array $accounts = [])
    {
        foreach ($accounts as $account) {
            if (!$account instanceof Account) {
                throw new \LogicException('Error : Invalid Account');
            }
        }
        $this->accounts = $accounts;
    }
    public function add(Account $account)
    {
        $this->accounts[] = $account;
    }
    public function all(): array
    {
        return $this->accounts;
    }
    public function merge(AccountRepository $accounts): void
    {
        foreach ($accounts->all() as $account) {
            $this->$accounts[] = $account;
        }
    }
    public function verifyCredentials(string $email, string $password)
    {
        foreach ($this->accounts as $account)
        {
            if ($account->getMail() == $email && $account->getPassword() == $password)
            {
                return $account;
            }
        }
        throw new \Exception('Error : Bad Informations entery.',500);
    }
}