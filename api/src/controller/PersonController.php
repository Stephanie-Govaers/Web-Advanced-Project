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

    public function findPersonById($id){
        $person = $this->pdoPersonRepository->findPersonById($id);
        return $this->personJsonView->convertPersonArrayToJson($person);
    }

    public function findAllPersons(){
        $personArray = $this->pdoPersonRepository->findAllPersons();
        return $this->personJsonView->convertPersonArrayToJson($personArray);
    }

    public function createPerson($personArray){
        $this->pdoPersonRepository->createPerson($personArray);
    }
    public function editPerson($personArray){
        $this->pdoPersonRepository->editPerson($personArray);
    }

    public function deletePersonById($id){
        $this->pdoPersonRepository->deletePersonById($id);
    }
}