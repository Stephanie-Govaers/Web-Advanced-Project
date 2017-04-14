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

    public function FindPersonById($id){
        $statement = $this->pdo->prepare('SELECT * FROM Persons WHERE ID = :id');
        $statement->bindParam(':id',$id,PDO::PARAM_INT);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();
        $record=$statement->fetch();
        // If the person was found
        if ($record != false) {
            $id = $record['id'];
            $name = $record['name'];
            $person = new Person();
            $person->setId($id);
            $person->setName($name);
        }
        return $person;
    }

    public function FindAllPersons(){
        $personArray = array();
        $counter = 0;
        $statement = $this->pdo->query('SELECT * FROM Persons');
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($statement->fetch() as $person){
            $personArray[$counter++] = $person;
        }
        return $personArray;

    }

}