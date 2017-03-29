<?php namespace model;
/**
 * Created by PhpStorm.
 * User: steph
 * Date: 28/03/2017
 * Time: 14:30
 */

$user = 'web62';
$password = 'Quinn28122109';
$database = 'web62_project';
$hostname = '213.136.26.180:2222';
$pdo = null;
try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database",
        $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
    $personPDORepository = new PDOPersonRepository($pdo);
    $personJsonView = new PersonJsonView();
    $personController = new PersonController(
        $personPDORepository, $personJsonView);
    $router = new AltoRouter();
    $router->setBasePath('/api');
    $router->map('GET','/persons/[i:id]',
        function($id) use (&$personController) {
            $personController->handleFindPersonById($id);
        }
    );
    $match = $router->match();
    if( $match && is_callable( $match['target'] ) ){
        call_user_func_array( $match['target'], $match['params'] );
    }
} catch (Exception $e) {
    var_dump($e);
}

