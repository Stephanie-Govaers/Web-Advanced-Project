<?php

use controller\PersonController;
use repository\PDOPersonRepository;
use view\PersonJsonView;

require "api/vendor/autoload.php";


/**
 * Created by PhpStorm.
 * User: steph
 * Date: 28/03/2017
 * Time: 14:30
 */

$user = 'web62_db';
$password = 'user_123';
$database = 'web62_db';
$hostname = '213.136.26.180';
$pdo = null;




try {
    // Setting up pdo
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
    // Setting up objects
    $personPDORepository = new PDOPersonRepository($pdo);
    $personJsonView = new PersonJsonView();
    $personController = new PersonController(
        $personJsonView, $personPDORepository);
    $eventPDORepository = new \repository\PDOEventRepository($pdo);
    $eventJSonView = new \view\EventJsonView();
    $eventController = new \controller\EventController(
        $eventJSonView, $eventPDORepository);

    // Setting up router
    $router = new AltoRouter();
    $router->setBasePath('/~user/Web-Advanced-Project/api');

    // Include the defined api routes
    include('routes.php');

    $match = $router->match();

    if ($match == false) {
        print ($_SERVER['REQUEST_URI']);
    }

    // IF we have a route match and the target is callable, call the function
    if( $match && is_callable( $match['target'] ) ){
        call_user_func_array( $match['target'], $match['params'] );
    }
} catch (Exception $ex) {
    var_dump($ex);
}


