<?php
/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 18/04/2017
 * Time: 14:31
 */

class PersonController extends CI_Controller{  //link tussen het beeld en datagedeelte

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PersonModel'); //laad de model in
        $this->load->helper('url_helper');
    }

    public function index(){ //functie die wordt aangeroepen als index.php
        $data['persons'] = $this->PersonModel->getPersons(); //haalt via het model alle personen op en steekt die in een data array
        $this->load->helper('form');
        $this->load->library('form_validation'); // deze 2 zijn nodig om later in home.php de form... functie aan te spreken
        $this->load->view('pages/home' , $data); // laad de home.php view in en geeft hem die data mee
    }

    public function editPerson(){
        $this->load->helper('form');
        $this->load->library('form_validation'); // hier zijn die 2 nodig om de data uit de form te kunnen halen

        $this->form_validation->set_rules('id', 'Id', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required'); // zegt dat alle formdata moet ingevuld zijn

        if ($this->form_validation->run() === FALSE) // als de formdata niet kan worden opgehaald wordt er een failed.php pagina aangesproken
        {
            $this->load->view('pages/failed');
        }
        else
        {
            $this->PersonModel->editPerson(); // anders spreekt hij de juiste functie aan van de model
            $this::index(); // en laad dan weer de hoofdpagina via index()
        }
    }

}