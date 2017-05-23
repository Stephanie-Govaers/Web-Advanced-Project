<?php
/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 03/05/2017
 * Time: 09:51
 */
use controller\PersonController;
use repository\PDOPersonRepository;
use model\Person;
use view\PersonJsonView;

class PersonControllerTest extends PHPUNIT_Framework_TestCase{
    public function setUp(){
        $view = new PersonJsonView();
        $repository = new PDOPersonRepository();
        $this->personController = new PersonController($view,$repository);
    }

    public function tearDown(){
        $this->personController = null;
    }


    public function testFindPersonById(){
        $person = new Person();
        $this->personController->createPerson($person);

        $this->assertEquals($this->personController->findPersonById(), $person);
    }

    public function testFindAllPersons(){
        $persons = $this->personController->findAllPersons();

        foreach ($persons as $person){
            $this->assertTrue(is_a($person, 'Person'));
        }
    }


    public function testCreatePerson(){
        $person = new Person();
        $this->personController->createPerson($person);

        $this->assertEquals($this->personController->findPersonById(), $person);
    }

    public function testEditPerson(){
        $person = new Event();
        $this->personController->createPerson($person);

        $person->setName('test');
        $$this->personController->editPerson($person);

        $this->assertEquals($this->personController->findPersonById(), $person);
    }

    public function testDeletePersonById(){
        $person = new Person();
        $this->personController->createPerson($person);


        $this->personController->deletsePersonById($person->getId());

        $this->assertEquals($this->personController->findpersonById(), null);
    }
}