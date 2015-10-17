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
    
    $app->match('/api/users', function(Request $request)use($app) {
        $content = json_decode($request->getContent());
        $sql = "INSERT INTO users (id,nome,email,ativo) VALUES(null,'{$content->nome}','{$content->email}',1)";
        $result = $app['db']->query($sql);
        return $app->json(array('result'=>true), 201);
    })->method('OPTIONS|POST');
    
};
