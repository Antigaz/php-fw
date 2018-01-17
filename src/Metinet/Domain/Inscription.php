<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:57
 */

namespace Metinet\Domain;


class Inscription
{
    private $event;
    private $user;

    public function __construct(Event $event, User $user)
    {
         if($user->canParticipateEvent($event)){
             $this->event = $event;
             $this->user = $user;
            $event->addParticipant($user);
         }
    }
}