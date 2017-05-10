<?php namespace view;

/**
 * Created by PhpStorm.
 * User: steph
 * Date: 29/03/2017
 * Time: 14:47
 */
class EventJsonView
{
    public function __construct()
    {
        
    }

    public function convertEventArrayToJson($arr){
        return $this->convert($arr);
    }

    private function convert($arr) {
        if (!is_array($arr)) {
            $return= array(
                'id' => $arr->getId(),
                'start' => $arr->getStart(),
                'end' => $arr->getEnd(),
                'person' => $arr->getPerson()
                );
        } else {
            $return = $arr;
        }

        return json_encode($return);
    }

}