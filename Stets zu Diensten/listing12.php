return array(
    'db' => array(
        'driver'  => 'Pdo',
        'dsn'     => 'mysql:dbname=secretdatabase;host=dbserver1;charset=utf8',
        'user'    => 'geheim',
        'pass'    => 'geheim',
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);
