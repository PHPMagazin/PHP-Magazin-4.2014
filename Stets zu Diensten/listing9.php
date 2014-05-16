<?php
namespace Shop\View\Helper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class SmallPinkPrincessBikeFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $viewHelperManager)
    {
        $serviceLocator = $viewHelperManager->getServiceLocator();

        $entity = $serviceLocator->get('SmallPinkPrincessBike');

        $helper = new SmallPinkPrincessBike();
        $helper->setEntity($entity);

        return $helper;
    }
}
