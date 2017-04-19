<?php

/**
 * Created by PhpStorm.
 * User: steph
 * Date: 11/04/2017
 * Time: 18:57
 */

//GET person by ID
$router->map('GET','/persons/[i:id]',
    function($id) use (&$personController) {
        print($personController->findPersonById($id));
    }
);
//GET all persons
$router->map('GET', '/persons',
    function() use(&$personController) {
        print($personController->findAllPersons());
    }
);
//GET event by ID
$router->map('GET', '/events/[i:id]',
    function($id) use (&$eventController) {
    print ($eventController->findEventById($id));
    }
);
//GET all events
$router->map('GET', '/events',
    function() use (&$eventController){
        print($eventController->findAllEvents());
    }
);

//GET events by person
$router->map('GET', '/events/person/[i:id]',
    function ($id) use (&$eventController, &$personController){
    $person = $personController->findPersonById($id);
    print($eventController->findEventsByPerson($person));
    });

//DELETE event by ID
$router->map('DELETE','/events/[i:id]',
    function ($id) use (&$eventController){
    $eventController->deleteEventById($id);
}
);
//DELETE person by ID
$router->map('DELETE', '/persons/[i:id]',
    function ($id) use (&$personController){
    $personController->deletePersonById($id);
    });

//PUT event (edit event)
$router->map('PUT', '/events',
    function ($eventArray) use(&$eventController){
    $eventController->editEvent($eventArray);
    });

//PUT person (edit person)
$router->map('PUT', '/persons',
    function ($personArray) use(&$personController){
    $personController->editPerson($personArray);
    });

//POST event (create new event)
$router->map('POST', '/events',
    function ($eventArray) use(&$eventController){
    $eventController->createEvent($eventArray);
    });

//POST person (create new person)
$router->map('POST', '/persons',
    function ($personArray) use (&$personController){
    $personController->createPerson($personArray);
    });
?>