<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

return function(Application $app, $page) {

    $app->get('/', function() use($page) {
        return $page('../view/index.html');
    });

    $app->get('/api/users', function()use($app) {
        $sql = "SELECT * FROM users";
        $result = $app['db']->fetchAll($sql);
        return $app->json($result,201);
    });
    
};
