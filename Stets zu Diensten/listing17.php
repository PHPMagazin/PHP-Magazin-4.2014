<?php
namespace Shop\Entity;

use Shop\Entity\Bell\BellInterface;
use Shop\Entity\Wheel\Wheel12InchAwareInterface;

class SpecialBike extends Bike implements Wheel12InchAwareInterface
{
    function __construct($name, $colour, BellInterface $bell)
    {
        $this->setName($name);
        $this->setColour($colour);
        $this->setBell($bell);
    }
}

