<?php
class PersonModel extends CI_Model{  //interactie met database
    public function __construct()
    {
        $this->load->database(); //laad de database die in config/database.php is gespecifieerd
    }

    public function getPersons(){
        $query = $this->db->get('persons'); //haalt alle personen op
        return $query->result_array(); //geeft het resultaat terug mee aan de controller
    }

    public function editPerson(){
        $this->load->helper('url'); // nodig om aan die post data te kunnen geraken


        $data = array(
            'id' => $this->input->post('id'), //haalt data op via post en steekt die in de dataarray
            'name' => $this->input->post('name')
        );

        $this->db->where('id',$this->input->post('id')); //zet klaar dat hij naar de doorgegeven id moet zoeken
        return $this->db->update('persons', $data); // en veranderd dan de naam die hij meekreeg
    }
}