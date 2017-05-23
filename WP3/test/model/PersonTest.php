<?php
/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 03/05/2017
 * Time: 08:59
 */

use model\Person;

class PersonTest extends PHPUNIT_Framework_TestCase{
    public function testGettersAndSettersId(){
        $person = new Person();
        $person->setId(35);

        $this->assertEquals($person->getId(),35);
    }

    public function testGettersAndSettersName(){
        $person = new Person();
        $person->setName("Bob de bouwer");

        $this->assertEquals($person->getName(),"Bob de bouwer");
    }
}