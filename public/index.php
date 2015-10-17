<?php

require '../vendor/autoload.php';

use Silex\Application;

$doctrine = require('../middlewares/doctrine.php');

$page = require('../middlewares/page.php');

$routes = require('../middlewares/routes.php');

$config = require('../middlewares/config.php');

$app = new Application;

$doctrine($app);

$config($app);

$routes($app,$page);

$app->run();