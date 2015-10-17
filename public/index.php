<?php

require '../vendor/autoload.php';
use Silex\Application;

$doctrine = require('../middlewares/doctrine.php');

$page = require('../middlewares/page.php');

$app = new Application;

$doctrine($app);

$app->get('/',function() use($page){
    return $page('../view/index.html');
});

$app->run();