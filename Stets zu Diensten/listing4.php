<?php
use Shop\Entity\Wheel\Wheel;

return array(
    [...]

    'service_manager' => array(
        'invokables' => array(
            'Shop\Entity\Bell\PinkPrincessBell' => 'Shop\Entity\Bell\PinkPrincessBell',
        ),
        'factories'  => array(
            'Shop\Entity\Wheel\10InchWheel'      => function ($serviceManager) {
                    $wheel = new Wheel('10inch', 10);

                    return $wheel;
                },
            'Shop\Entity\Wheel\12InchWheel'      => function ($serviceManager) {
                    $wheel = new Wheel('12inch', 12);

                    return $wheel;
                },
            'Shop\Entity\SmallPinkPrincessBike'  => 'Shop\Entity\SmallPinkPrincessBikeFactory',
            'Shop\Entity\MediumPinkPrincessBike' => 'Shop\Entity\MediumPinkPrincessBikeFactory',
        ),
        'aliases'    => array(
            'PinkPrincessBell'       => 'Shop\Entity\Bell\PinkPrincessBell',
            '10InchWheel'            => 'Shop\Entity\Wheel\10InchWheel',
            '12InchWheel'            => 'Shop\Entity\Wheel\12InchWheel',
            'SmallPinkPrincessBike'  => 'Shop\Entity\SmallPinkPrincessBike',
            'MediumPinkPrincessBike' => 'Shop\Entity\MediumPinkPrincessBike',
        ),
        'shared'     => array(
            'Shop\Entity\Wheel\10InchWheel' => false,
            'Shop\Entity\Wheel\12InchWheel' => false,
        ),
    ),
);

