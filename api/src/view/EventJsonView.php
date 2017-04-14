<?php namespace view;

/**
 * Created by PhpStorm.
 * User: steph
 * Date: 29/03/2017
 * Time: 14:47
 */
class EventJsonView
{
    public function convertEventArrayToJson($event){
        return json_encode($event);
    }

}