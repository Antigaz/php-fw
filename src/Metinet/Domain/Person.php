<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:58
 */

namespace Metinet\Domain;


class Person implements User
{
    private $nom;

    public function __construct(string $nom)
     {
         $this->nom = $nom;
     }

    public function canParticipateEvent(Event $event){

            if($event->isPrivateEvent()){
                    return true;
        }
         return false;
     }
}