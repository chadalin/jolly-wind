<?php


function rout()
{

    return	$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '/index', ['App\Controllers\HomeController', 'index']);
        $r->addRoute('GET', '/post{id}', ['App\Controllers\HomeController', 'post']);
        $r->addRoute('GET', '/allposts', ['App\Controllers\HomeController', 'getAllPosts']);
        $r->addRoute('GET', '/admin', ['App\Controllers\AdminController', 'index']);
        $r->addRoute('GET', '/admin/users', ['App\Controllers\AdminController', 'users']);
        $r->addRoute('GET', '/admin/users/create', ['App\Controllers\AdminController', 'createUsers']);
        $r->addRoute('POST', '/admin/users/add', ['App\Controllers\AdminController', 'addUsers']);
        $r->addRoute('GET', '/admin/users/edit', ['App\Controllers\AdminController', 'editUsers']);


        

        $r->addRoute('GET', '/tasks', ['App\Controllers\TaskController', 'index']);

        $r->addRoute('GET', '/users', ['App\Controllers\UserController', 'index']);
        $r->addRoute('GET', '/users{id}', ['App\Controllers\UserController', 'users']);
        // {id} must be a number (\d+)



    });

}
