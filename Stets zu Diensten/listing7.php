return array(
    'controllers'     => array(
        'invokables' => array(
            'Shop\Controller\Index' => 'Shop\Controller\IndexController',
        ),
    ),
    'view_helpers'     => array(
        'factories' => array(
            'shopSmallPinkPrincessBike' => 'Shop\View\Helper\SmallPinkPrincessBikeFactory',
        ),
    ),

    [...]
);
