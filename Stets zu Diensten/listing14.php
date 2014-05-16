<?php
namespace Shop\Entity\Wheel;

interface Wheel12InchAwareInterface
{
    public function setFrontWheel(WheelInterface $wheel);

    public function getFrontWheel();

    public function setBackWheel(WheelInterface $wheel);

    public function getBackWheel();
}
