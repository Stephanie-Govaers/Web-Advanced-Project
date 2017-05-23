<?php
/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 03/05/2017
 * Time: 10:22
 */

use view\PersonJsonView;
use model\Person;

class PersonJsonViewTest extends PHPUNIT_Framework_TestCase{

    public function testConvertEventArrayToJson(){
        $view = new PersonJsonView();
        $person = new Person();

        $this->assertEquals(json_encode($person), $view->convertEventArrayToJson($person));
    }

}