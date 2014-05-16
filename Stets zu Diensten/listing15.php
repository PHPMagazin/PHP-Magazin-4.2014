<?php
namespace Shop\Entity\Wheel;

use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Wheel12InchInitializer implements InitializerInterface
{
    public function initialize($instance, ServiceLocatorInterface $serviceLocator)
    {
        if ($instance instanceof Wheel12InchAwareInterface) {
            $frontWheel = $serviceLocator->get('12InchWheel');
            $backWheel = $serviceLocator->get('12InchWheel');

            $instance->setFrontWheel($frontWheel);
            $instance->setBackWheel($backWheel);
        }
    }
}

