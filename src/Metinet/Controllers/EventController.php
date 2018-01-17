<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:39
 */

namespace Metinet\Controllers;


use Metinet\Core\Http\Request;
use Metinet\Core\Http\Response;
/**
 * Event constructor.
 * @param $title
 * @param $description
 * @param $goal
 * @param $numbersPersonAllowed
 * @param $day
 * @param $timeSlot
 * @param $nameRoom
 */

class EventController
{
    public function event(Request $request): Response
    {
        return new Response();
    }
    /**
     * Event constructor.
     * @param $title
     * @param $description
     * @param $goal
     * @param $numbersPersonAllowed
     * @param $day
     * @param $timeSlot
     * @param $nameRoom
     * @param $adress
     * @param $typeEvent
     * @param $cost
     */
    public function createEvent(Request $request): Response
    {
        $query = $request->getQuery();
        $eveny = new Event(
            $query->get('title'),
            $query->get('description'),
            $query->get('goal'),
            $query->get('numbersPersonAllowed'),
            $query->get('day'),
            $query->get('timeSlot'),
            $query->get('nameRoom'),
            $query->get('adress'),
            $query->get('typeEvent'),
            $query->get('cost')
        );
    }

    public  function retrieveEventList(Request $request): Response
    {
        $events = [
            ['title' => 'Réunion des anciens', 'description' => 'Belle salle', 'goal' => 'Réunion', 'numbersPersonAllowed' => '25', 'day' => '2018/01/18', 'nameRoom' => 'Demi-lune', 'adress' => '123 rue', 'typeEvent' => 'false', 'cost' => '250']
        ];
        $content = sprintf('<p>Affiche la liste des Events</p>');
        foreach ($events as $event) {
            $content .= sprintf('<li>%s le %s dans la salle %s </li>', $event['title'], $event['day'], $event['nameRoom']);
        }

        return new Response($content);
    }

}