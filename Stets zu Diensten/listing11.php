<?php
namespace Shop\Controller;

use Shop\Entity\Bell\BellInterface;
use Shop\Entity\BikeInterface;
use Shop\Entity\Wheel\WheelInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $pinkPrincessBellEntity = null;
    protected $wheel10InchEntity = null;
    protected $wheel12InchEntity = null;
    protected $bikeSmallEntity = null;
    protected $bikeMediumEntity = null;

    public function setPinkPrincessBellEntity($pinkPrincessBellEntity)
    {
        $this->pinkPrincessBellEntity = $pinkPrincessBellEntity;
    }

    public function getPinkPrincessBellEntity()
    {
        return $this->pinkPrincessBellEntity;
    }

    public function setWheel10InchEntity($wheel10InchEntity)
    {
        $this->wheel10InchEntity = $wheel10InchEntity;
    }

    public function getWheel10InchEntity()
    {
        return $this->wheel10InchEntity;
    }

    public function setWheel12InchEntity($wheel12InchEntity)
    {
        $this->wheel12InchEntity = $wheel12InchEntity;
    }

    public function getWheel12InchEntity()
    {
        return $this->wheel12InchEntity;
    }

    public function setBikeSmallEntity($bikeSmallEntity)
    {
        $this->bikeSmallEntity = $bikeSmallEntity;
    }

    public function getBikeSmallEntity()
    {
        return $this->bikeSmallEntity;
    }

    public function setBikeMediumEntity($bikeMediumEntity)
    {
        $this->bikeMediumEntity = $bikeMediumEntity;
    }

    public function getBikeMediumEntity()
    {
        return $this->bikeMediumEntity;
    }

    public function indexAction()
    {
        return new ViewModel(
            array(
                'bellPrincess' => $this->getPinkPrincessBellEntity(),
                'wheel10Inch'  => $this->getWheel10InchEntity(),
                'wheel12Inch'  => $this->getWheel12InchEntity(),
                'bikeSmall'    => $this->getBikeSmallEntity(),
                'bikeMedium'   => $this->getBikeMediumEntity(),
            )
        );
    }

    public function showAction()
    {
        return new ViewModel(array());
    }
}


