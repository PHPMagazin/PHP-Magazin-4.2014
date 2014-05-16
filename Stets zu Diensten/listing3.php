<?php
namespace Shop\Entity;

use Shop\Entity\Bell\BellInterface;
use Shop\Entity\Wheel\WheelInterface;

class Bike implements BikeInterface
{
    protected $name = null;

    protected $colour = null;

    protected $bell = null;

    protected $frontWheel = null;

    protected $backWheel = null;

    function __construct(
        $name, $colour, BellInterface $bell, WheelInterface $frontWheel,
        WheelInterface $backWheel
    ) {
        $this->setName($name);
        $this->setColour($colour);
        $this->setBell($bell);
        $this->setFrontWheel($frontWheel);
        $this->setBackWheel($backWheel);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    public function getColour()
    {
        return $this->colour;
    }

    public function setBell(BellInterface $bell)
    {
        $this->bell = $bell;
    }

    public function getBell()
    {
        return $this->bell;
    }

    public function setBackWheel(WheelInterface $backWheel)
    {
        $this->backWheel = $backWheel;
    }

    public function getBackWheel()
    {
        return $this->backWheel;
    }

    public function setFrontWheel(WheelInterface $frontWheel)
    {
        $this->frontWheel = $frontWheel;
    }

    public function getFrontWheel()
    {
        return $this->frontWheel;
    }
}

interface BikeInterface
{
    public function setName($name);
    public function getName();
    public function setColour($colour);
    public function getColour();
    public function setBell(BellInterface $bell);
    public function getBell();
    public function setBackWheel(WheelInterface $backWheel);
    public function getBackWheel();
    public function setFrontWheel(WheelInterface $frontWheel);
    public function getFrontWheel();
}
