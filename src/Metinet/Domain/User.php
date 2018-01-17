<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 15:01
 */

interface User {
    public function canParticipateEvent(Event $event);
}