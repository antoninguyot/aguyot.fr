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

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', 'HomeController@index');
$router->get('notes', 'HomeController@notes');
$router->get('cv', 'HomeController@cv');
$router->get('locale/{locale}', function ($locale) {
    return redirect('/')->withCookie(new \Symfony\Component\HttpFoundation\Cookie('l', $locale));
});
