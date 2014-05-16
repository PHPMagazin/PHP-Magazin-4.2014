<?php
namespace Shop\Entity;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class SpecialBikeFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $bell = $serviceLocator->get('PinkPrincessBell');

        $bike = new SpecialBike('SpecialBike', 'pink', $bell);

        return $bike;
    }

} 
