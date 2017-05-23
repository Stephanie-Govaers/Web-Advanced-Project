<?php
/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 03/05/2017
 * Time: 09:51
 */



use controller\EventController;
use repository\PDOEventRepository;
use model\Event;
use model\Person;
use view\EventJsonView;


class EventControllerTest extends PHPUnit_Framework_TestCase {

    public function setUp(){
        $view = new EventJsonView();
        $repository = new PDOEventRepository();
        $this->eventController = new EventController($view,$repository);
    }

    public function tearDown(){
        $this->eventController = null;
    }


    public function testFindEventById(){
        $event = new Event();
        $this->eventController->createEvent($event);

        $this->assertEquals($this->eventController->findEventById(), $event);
    }

    public function testFindAllEvents(){
        $events = $this->eventController->findAllEvents();

        foreach ($events as $event){
            $this->assertTrue(is_a($event, 'Event'));
        }
    }

    public function testFindEventsByPerson(){
        $person = new Person();
        $event = new Event();
        $event->setPerson($person);

        $this->eventController->createEvent($event);

        $this->assertEquals($this->eventController->findEventById(), $event);
    }

    public function testCreateEvent(){
        $event = new Event();
        $this->eventController->createEvent($event);

        $this->assertEquals($this->eventController->findEventById(), $event);
    }
    public function testEditEvent(){
        $event = new Event();
        $this->eventController->createEvent($event);

        $event->setName('test');
        $$this->eventController->editEvent($event);

        $this->assertEquals($this->eventController->findEventById(), $event);
    }

    public function testDeleteEventById(){
        $event = new Event();
        $this->eventController->createEvent($event);


        $this->eventController->deletseEventById($event->getId());

        $this->assertEquals($this->eventController->findEventById(), null);
    }
}