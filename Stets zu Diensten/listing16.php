<?php
return array(
    [...]

    'service_manager' => array(
        [...]

        'factories'  => array(
            [...]

            'Shop\Entity\SpecialBike' => 'Shop\Entity\SpecialBikeFactory',
        ),
        'aliases'    => array(
            [...]

            'SpecialBike' => 'Shop\Entity\SpecialBike',
        ),

        [...]

        'initializers' => array(
            'Shop\Entity\Wheel\Wheel12InchInitializer',
        ),
    ),
);

