<?php

/**
 * Created by PhpStorm.
 * User: Brent
 * Date: 10/05/2017
 * Time: 18:27
 */
class Event extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('eventModel');
        $this->load->helper('url_helper');
    }

    public function deleteEvent($id)
    {


        $this->nieuwMateriaalModel->deleteRow($id);

        $data['events'] = $this->eventModel->getEvents();

        $this->load->view('home', $data);
    }

    function addEvent(){
        $this->eventModel->addEvent();

        $data['events'] = $this->eventModel->getEvents();

        $this->load->view('home', $data);
    }



}