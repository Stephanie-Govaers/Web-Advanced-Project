<?php
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
        $this->eventJsonView = new EventJsonView($eventJsonView);
        $this->pdoEventRepository = new PDOEventRepository($pdoEventRepository);
    }
}