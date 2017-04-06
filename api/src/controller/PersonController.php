<?php

/**
 * Created by PhpStorm.
 * User: steph
 * Date: 29/03/2017
 * Time: 14:49
 */
class PersonController{
    private $personJsonView, $pdoPersonRepository;

    public function __construct($personJsonView, $pdoPersonRepository)
    {

        $this->personJsonView = new PersonJsonView($personJsonView);
        $this->pdoPersonRepository = new PDOPersonRepository($pdoPersonRepository);
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