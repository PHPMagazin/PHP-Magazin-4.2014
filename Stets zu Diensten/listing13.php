return array(
    'db' => array(
        'adapters' => array(
            'db1' => array(
               'driver'  => 'Pdo',
               'dsn'     => 'mysql:dbname=secretdatabase;host=dbserver1;charset=utf8',
               'user'    => 'geheim',
               'pass'    => 'geheim',
            ),
             
            'db2' => array(
               'driver'  => 'Pdo',
               'dsn'     => 'mysql:dbname=anotherdatabase;host=dbserver2;charset=utf8',
               'user'    => 'geheim',
               'pass'    => 'geheim',
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Db\Adapter\AdapterAbstractServiceFactory',
        ),
    ),
);
