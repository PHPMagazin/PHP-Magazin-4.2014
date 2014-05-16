<?php
namespace Shop\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $serviceLocator = $controllerManager->getServiceLocator();

        $bellPrincess = $serviceLocator->get('PinkPrincessBell');
        $wheel10Inch  = $serviceLocator->get('10InchWheel');
        $wheel12Inch  = $serviceLocator->get('12InchWheel');
        $bikeSmall    = $serviceLocator->get('SmallPinkPrincessBike');
        $bikeMedium   = $serviceLocator->get('MediumPinkPrincessBike');

        $controller = new IndexController();
        $controller->setPinkPrincessBellEntity($bellPrincess);
        $controller->setWheel10InchEntity($wheel10Inch);
        $controller->setWheel12InchEntity($wheel12Inch);
        $controller->setBikeSmallEntity($bikeSmall);
        $controller->setBikeMediumEntity($bikeMedium);

        return $controller;
    }
}
