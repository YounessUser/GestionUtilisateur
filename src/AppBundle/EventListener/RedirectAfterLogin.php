<?php
/**
 * Created by PhpStorm.
 * User: youness
 * Date: 2018-02-15
 * Time: 10:35 AM
 */

namespace AppBundle\EventListener;


use FOS\UserBundle\FOSUserBundle;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class RedirectAfterLogin implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [

    ];
    }

}