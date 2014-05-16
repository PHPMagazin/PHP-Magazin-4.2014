<?php
namespace Shop\Entity;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class SmallPinkPrincessBikeFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $bell       = $serviceLocator->get('PinkPrincessBell');
        $frontWheel = $serviceLocator->get('10InchWheel');
        $backWheel  = $serviceLocator->get('10InchWheel');

        $bike = new Bike(
            'SmallPrincessBike', 'pink', $bell, $frontWheel, $backWheel
        );

        return $bike;
    }
}

