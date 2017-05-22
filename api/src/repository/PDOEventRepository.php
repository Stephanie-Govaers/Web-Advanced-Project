<?php namespace repository;
use model\Event;
use PDO;

/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 31/03/2017
 * Time: 09:45
 */

class PDOEventRepository
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function findEventById($id){
        $statement = $this->pdo->prepare('SELECT * FROM events WHERE ID = :id');
        $statement->bindParam(':id',$id,PDO::PARAM_INT);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();
        $record=$statement->fetch();
        // If the event was found
        if ($record != false) {
            $id = $record['id'];
            $start = $record['start'];
            $end = $record['end'];
            $name = $record['name'];
            $person = $record['person'];
            $event = new Event();
            $event->setId($id);
            $event->setStart($start);
            $event->setEnd($end);
            $event->setName($name);
            $event->setPerson($person);
        }
        return $event;
    }

    public function findAllEvents(){
        $eventArray = array();
        $counter = 0;
        $statement = $this->pdo->query('SELECT * FROM events');
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($statement->fetchAll() as $event){
            $eventArray[$counter++] = $event;
        }
        return $eventArray;

    }


    public function findEventsByPerson($id){
        $eventArray = array();
        $counter = 0;
        $statement = $this->pdo->query('SELECT * FROM events WHERE person = :id');
        $statement->bindParam(':id',$id,PDO::PARAM_INT);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($statement->fetchAll() as $event){
            $eventArray[$counter++] = $event;
        }
        return $eventArray;
    }

    public function findEventsByDateInterval($start, $end){
        $eventArray = array();
        $counter = 0;
        $statement = $this->pdo->query('SELECT * FROM events WHERE start BETWEEN = :start AND :end');
        $statement->bindParam(':start',$start);
        $statement->bindParam(':end',$end);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($statement->fetchAll() as $event){
            $eventArray[$counter++] = $event;
        }
        return $eventArray;
    }

    public function findEventsByPersonAndDateInterval($id, $start, $end){
        $eventArray = array();
        $counter = 0;
        $statement = $this->pdo->query('SELECT * FROM events WHERE start BETWEEN = :start AND :end AND person = :id');
        $statement->bindParam(':id',$id,PDO::PARAM_INT);
        $statement->bindParam(':start',$start);
        $statement->bindParam(':end',$end);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($statement->fetchAll() as $event){
            $eventArray[$counter++] = $event;
        }
        return $eventArray;
    }

    public function createEvent($eventArray){
        $name = $eventArray['name'];
        $start = $eventArray['start'];
        $end = $eventArray['end'];
        $person = $eventArray['person'];
        $statement = $this->pdo->prepare("INSERT INTO events (name, start, end, person)
        VALUES (:name, :start, :end, :person)");
        $statement->bindParam(':name', $name);
        $statement->bindParam(':start', $start);
        $statement->bindParam(':end', $end);
        $statement->bindParam(':person', $person);
        exec($statement);
    }

    public function editEvent($eventArray){
        $id = $eventArray['id'];
        $name = $eventArray['name'];
        $start = $eventArray['start'];
        $end = $eventArray['end'];
        $person = $eventArray['person'];
        $this->findEventById($id);
        $statement = $this->pdo->prepare("UPDATE events SET name= :name, start= :start, end= :end, person= :person");
        $statement->bindParam(':name', $name);
        $statement->bindParam(':start', $start);
        $statement->bindParam(':end', $end);
        $statement->bindParam(':person', $person);
        exec($statement);
    }
    public function deleteEventById($id){
        $this->findEventById($id);
        $statement = $this->pdo->prepare("DELETE FROM events WHERE id= :id");
        exec($statement);
    }

}