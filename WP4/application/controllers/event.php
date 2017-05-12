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


        $this->eventModel->deleteEvent($id);

        $data['events'] = $this->eventModel->getEvents();

        $this->load->view('home', $data);
    }

    function addEvent(){
        $this->eventModel->addEvent();

        $data['events'] = $this->eventModel->getEvents();

        $this->load->view('home', $data);
    }

    function editPage($id){
        $events = $this->eventModel->getRowById($id);

        $this->load->view('header');
        $this->load->view('editEvent', $events);
        $this->load->view('footer');
    }


    public function editEvent($id){
        $data = array(
            'name' => $this->input->post('Name'),
            'start' =>  $this->input->post('StartDate'),
            'end' => $this->input->post('EndDate'),
            'person' => $this->input->post('Persons')
        );

        $this->eventModel->editEvents($id, $data);

        redirect('home', 'refresh');
    }


}