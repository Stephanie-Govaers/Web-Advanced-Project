<?php
/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 03/05/2017
 * Time: 10:15
 */

use view\EventJsonView;
use model\Event;

class EventJsonViewTest extends PHPUNIT_Framework_TestCase{

    public function testConvertEventArrayToJson(){
        $view = new EventJsonView();
        $event = new Event();

        $this->assertEquals(json_encode($event), $view->convertEventArrayToJson($event));
    }

}