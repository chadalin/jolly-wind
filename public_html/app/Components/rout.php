<?php


function rout()
{

    return	$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '/index', ['App\Controllers\HomeController', 'index']);
        $r->addRoute('GET', '/admin', ['App\Controllers\AdminController', 'index']);
        $r->addRoute('GET', '/tasks', ['App\Controllers\TaskController', 'index']);
        $r->addRoute('GET', '/users', ['App\Controllers\UserController', 'index']);
        // {id} must be a number (\d+)



    });

}
