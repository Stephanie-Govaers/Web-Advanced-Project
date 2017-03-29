<?php
class PersonJsonView{
    public function convertPersonArrayToJson($person){
        return json_encode($person);
    }
}