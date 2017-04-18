<?php
class PersonModel extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getPersons(){
        $query = $this->db->get('persons');
        return $query->result_array();
    }

    public function editPerson(){
        $this->load->helper('url');


        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name')
        );

        return $this->db->insert('persons', $data);
    }
}