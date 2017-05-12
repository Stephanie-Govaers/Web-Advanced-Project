<?php

/**
 * Created by PhpStorm.
 * User: Brent
 * Date: 10/05/2017
 * Time: 16:25
 */
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('eventModel');
        $this->load->helper('url_helper');
    }

    function index()
    {
     $this->home();
    }

    function home(){
        if($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            //$data['username'] = $session_data['username'];

            $data['events'] = $this->eventModel->getEvents();

            $this->load->view('header');
            $this->load->view('home', $data);
            $this->load->view('footer');
        }
        else
        {
            //If no session, redirect to login page
            redirect('site/login', 'refresh');
        }
    }

    function toevoegen(){
        $this->load->view('EventToevoegen');
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('site/login', 'refresh');
    }

}