<?php

/**
 * Created by PhpStorm.
 * User: steph
 * Date: 11/04/2017
 * Time: 18:57
 */

$router->map('GET','/persons/[i:id]',
    function($id) use (&$personController) {
        $personController->handleFindPersonById($id);
    }
);
$router->map('GET', '/persons',
    function () use(&$personController) {
        $personController->handleGetAllPersons();
    }
);

$router->map('GET', '/events/[i:id]',
    function ($id) use (&$eventController) {
    $eventController->handleFindEventById($id);
    }
);

$router->map('GET', '/events',
    function () use (&$eventController){
    $eventController->handleGetAllEvents();
    }
);
?>