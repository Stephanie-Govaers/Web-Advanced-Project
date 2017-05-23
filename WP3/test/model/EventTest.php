<?php
/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 18/04/2017
 * Time: 13:41
 */

use model\Event;
use model\Person;

class EventTest extends PHPUnit_Framework_TestCase{

    public function testGettersAndSettersId(){
        $event= new Event();
        $event->setId(3);

        $this->assertEquals($event->getId(),3);
    }
    public function testGettersAndSettersStart(){
        $event= new Event();
        $moment = new DateTime();
        $moment->setDate(1995,20,12);
        $moment->setTime(11,34);
        $event->setStart($moment);

        $this->assertEquals($event->getStart(),$moment);
    }
    public function testGettersAndSettersEnd(){
        $event= new Event();
        $moment = new DateTime();
        $moment->setDate(1995,20,12);
        $moment->setTime(11,34);
        $event->setEnd($moment);

        $this->assertEquals($event->getEnd(),$moment);
    }
    public function testGettersAndSettersName(){
        $event= new Event();
        $event->setName("Bob de bouwer legt zijn eerste steen.");

        $this->assertEquals($event->getName(),"Bob de bouwer legt zijn eerste steen.");
    }
    public function testGettersAndSettersPerson(){
        $event= new Event();
        $person = new Person();
        $event->setPerson($person);

        $this->assertEquals($event->getPerson(),$person);
    }


}
