<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/test', function () use ($router) {
    return 'test';
});
