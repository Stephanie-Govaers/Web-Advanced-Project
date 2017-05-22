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

    public function findEventById($id){
        $event = $this->pdoEventRepository->findEventById($id);
        return $this->eventJsonView->convertEventArrayToJson($event);
    }

    public function findAllEvents(){
        $eventArray = $this->pdoEventRepository->findAllEvents();
        return $this-> eventJsonView->convertEventArrayToJson($eventArray);
    }

    public function findEventsByPerson($id){
        $events = $this->pdoEventRepository->findEventsByPerson($id);
        return $this->eventJsonView->convertEventArrayToJson($events);
    }

    public function findEventsByDateInterval($start, $end){
        $events = $this->pdoEventRepository->findEventsByDateInterval($start, $end);
            return $this->eventJsonView->convertEventArrayToJson($events);
        }
    public function findEventsByPersonAndDateInterval($id, $start, $end){
        $events = $this->pdoEventRepository->findEventsByPersonAndDateInterval($id,$start,$end);
        return $this->eventJsonView->convertEventArrayToJson($events);
    }
    public function createEvent($eventArray){
        $this->pdoEventRepository->createEvent($eventArray);
    }
    public function editEvent($eventArray){
        $this->pdoEventRepository->editEvent($eventArray);
    }

    public function deleteEventById($id){
        $this->pdoEventRepository->deleteEventById($id);
    }
}