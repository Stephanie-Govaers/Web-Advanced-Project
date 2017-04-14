<?php namespace controller;
/**
 * Created by PhpStorm.
 * User: steph
 * Date: 29/03/2017
 * Time: 14:49
 */
class EventController{
    private $eventJsonView, $pdoEventRepository;

    public function __construct($eventJsonView, $pdoEventRepository)
    {
        $this->eventJsonView = $eventJsonView;
        $this->pdoEventRepository = $pdoEventRepository;
    }

    public function handleFindEventById($id){
        $event = $this->pdoEventRepository->FindEventById($id);
        return $this->eventJsonView->convertEventArrayToJson($event);
    }

    public function handleGetAllEvents(){
        $eventArray = $this->pdoEventRepository->FindAllEvents();
        return $this-> eventJsonView->convertEventArrayToJson($eventArray);
    }
}