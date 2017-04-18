<?php
/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 18/04/2017
 * Time: 14:31
 */

class PersonController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PersonModel');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['persons'] = $this->PersonModel->getPersons();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('pages/home' , $data);
    }

    public function editPerson(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id', 'Id', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('pages/failed');
        }
        else
        {
            $this->PersonModel->editPerson();
            $this::index();
        }
    }

}