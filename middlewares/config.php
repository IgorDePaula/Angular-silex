<?php
use Silex\Application;
return function(Application $app){
    $app['debug'] = true;
    return $app;
};