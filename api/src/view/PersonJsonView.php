<?php namespace view;
class PersonJsonView{
    public function convertPersonArrayToJson($arr){
        return $this->convert($arr);
    }
    
    private function convert($arr) {
        if (!is_array($arr)) {
            $return= array('id' => $arr->getId(), 'name' => $arr->getName());
        } else {
            $return = [];
            foreach($arr as $element) {
                array_push($return, array('id' => $element->getId(), 'name' => $element->getName()));
            }
        }
        return json_encode($return);
    }
}