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
function teste() {
    if(true){
        $db_host = 'mysql';
        $db_port = '3306';
        $db_database = 'raquel';
        $db_username = 'root';
        $db_password = 'helloworld';
    }else{
        $db_host = '127.0.0.1';
        $db_port = '3306';
        $db_database = 'raquel';
        $db_username = 'root';
        $db_password = 'teste';
    }

    $mysqli = new mysqli($db_host, $db_username, $db_password, $db_database, $db_port);

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    echo 'Connection OK';

    $mysqli->close();
}

$router->get('/', function () use ($router) {
    teste();
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('/', function () {
        echo '/api';
    });

    $router->get('cliente', ['uses' => 'ClienteController@showAll']);

    $router->get('cliente/{id}', ['uses' => 'ClienteController@showOne']);

    $router->post('cliente', ['uses' => 'ClienteController@create']);

    $router->delete('cliente/{id}', ['uses' => 'ClienteController@delete']);

    $router->put('cliente/{id}', ['uses' => 'ClienteController@update']);
});
