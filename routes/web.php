<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    return $router->app->version();
});

# Few simple REST APIs to test
$router->get('/accounts', ['as' => 'findAccounts', 'uses' => 'BankAccounts\AccountsController@findAccounts']);
$router->get('/accounts/{actnum}', ['as' => 'getAccountByActNumber', 'uses' => 'BankAccounts\AccountsController@getAccountByActNumber']);