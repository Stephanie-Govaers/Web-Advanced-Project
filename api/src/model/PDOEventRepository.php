<?php
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
        $this->pdo = new PDO($pdo);
    }



}