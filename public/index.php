<?php

require '../vendor/autoload.php';
use Silex\Application;

$app = new Application;

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
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

$app->get('/',function(){
    return "Hello World!";
});
$app->get('/users', function(){
   return 'users';
});
$app->get('/users/{id}', function($id){
   return $id;
});
$app->run();