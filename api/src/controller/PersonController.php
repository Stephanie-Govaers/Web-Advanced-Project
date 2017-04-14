<?php namespace controller;

/**
 * Created by PhpStorm.
 * User: steph
 * Date: 29/03/2017
 * Time: 14:49
 */
class PersonController{
    private $personJsonView;
    private $pdoPersonRepository;

    public function __construct($personJsonView, $pdoPersonRepository) {
        $this->personJsonView = $personJsonView;
        $this->pdoPersonRepository =$pdoPersonRepository;
    }

    public function handleFindPersonById($id){
        $person = $this->pdoPersonRepository->FindPersonById($id);
        return $this->personJsonView->convertPersonArrayToJson($person);
    }

    public function handleGetAllPersons(){
        $personArray = $this->pdoPersonRepository->FindAllPersons();
        return $this->personJsonView->convertPersonArrayToJson($personArray);
    }
}