<?php
namespace Shop;

use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

class Module implements ControllerProviderInterface, ViewHelperProviderInterface
{
    [...]

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getControllerConfig()
    {
        return array(
            'invokables' => array(
                'Shop\Controller\Index' => 'Shop\Controller\IndexController',
            ),
        );
    }

    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'shopSmallPinkPrincessBike' => 'Shop\View\Helper\SmallPinkPrincessBikeFactory',
            ),
        );
    }
}


