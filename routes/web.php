<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('hello-fr');
});

$router->get('fr', function () use ($router) {
    return view('hello-fr');
});

$router->get('en', function () use ($router) {
    return view('hello-en');
});

$router->get('notes', function () use ($router) {
    return view('notes');
});
