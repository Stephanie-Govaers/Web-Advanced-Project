<?php namespace repository;
use model\Person;
use PDO;

/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 29/03/2017
 * Time: 21:11
 */
class PDOPersonRepository{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function findPersonById($id){
        $person = null;

        $statement = $this->pdo->prepare('SELECT * FROM persons WHERE ID = :id');
        $statement->bindParam(':id',$id,PDO::PARAM_INT);
        $statement->execute();
        $record=$statement->fetch(PDO::FETCH_ASSOC);
        // If the person was found
        if ($record != false) {
            $person = new Person();
            $person->setId($record['id']);
            $person->setName($record['name']);
        }
        return $person;
    }

    public function findAllPersons(){
        $statement = $this->pdo->query('SELECT * FROM persons');
        $personArray = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $personArray;

    }

    public function createPerson($personArray){
        $name = $personArray['name'];
        $statement = $this->pdo->prepare("INSERT INTO persons (name)
        VALUES (:name)");
        $statement->bindParam(':name', $name);
        exec($statement);
    }

    public function editPerson($personArray){
        $id = $personArray['id'];
        $name = $personArray['name'];
        $this->findPersonById($id);
        $statement = $this->pdo->prepare("UPDATE persons SET name= :name");
        $statement->bindParam(':name', $name);
        exec($statement);
    }
    public function deletePersonById($id){
        $this->findPersonById($id);
        $statement = $this->pdo->prepare("DELETE FROM persons WHERE id= :id");
        exec($statement);
    }

}