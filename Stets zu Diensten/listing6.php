<?php
namespace Shop\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $bellPrincess = $this->getServiceLocator()->get('PinkPrincessBell');
        $wheel10Inch  = $this->getServiceLocator()->get('10InchWheel');
        $wheel12Inch  = $this->getServiceLocator()->get('12InchWheel');
        $bikeSmall    = $this->getServiceLocator()->get('SmallPinkPrincessBike');
        $bikeMedium   = $this->getServiceLocator()->get('MediumPinkPrincessBike');

        return new ViewModel(
            array(
                'bellPrincess' => $bellPrincess,
                'wheel10Inch'  => $wheel10Inch,
                'wheel12Inch'  => $wheel12Inch,
                'bikeSmall'    => $bikeSmall,
                'bikeMedium'   => $bikeMedium,
            )
        );
    }
}


