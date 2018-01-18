<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:13
 */

namespace Metinet\Core\Controller;

use Metinet\Core\Http\Request;
use Metinet\Core\Http\Response;
use Metinet\Domain\Account;
use Metinet\Domain\AccountRepository;

class AccountController
{
    public function login(Request $request): Response
     {
         $account = [new Account('test@test.com', 'test')];
         $accountRepository = new AccountRepository($account);

         $email = $request->getQuery()->get('email');
         $password = $request->getQuery()->get('password');

         $account = $accountRepository->verifyCredentials($email, $password);

         session_start();
         $_SESSION['email'] = $account->getMail();

        return new Response(sprintf('Vous etes maintenant connecté humain %s',$_SESSION['email']));
     }

    public function logout()
     {
            session_destroy();
            return new Response(sprintf('Vous êtes maintenant déconnecté. Cya.'));
     }

     public function register(Request $request): Response
     {

     }
}