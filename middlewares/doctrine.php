<?php

use Silex\Application;

return function(Application $app) {
    return $app->register(new Silex\Provider\DoctrineServiceProvider(), array(
        'db.options' => array(
            'driver' => 'mysqli',
            'host' => 'localhost',
            'dbname' => 'teste',
            'user' => 'teste',
            'password' => 'teste',
            'port' => 3306,
            'charset' => 'utf8_general_ci'
        )
            )
    );
};
