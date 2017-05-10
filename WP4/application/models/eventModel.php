<?php
/**
 * Created by PhpStorm.
 * User: Brent
 * Date: 10/05/2017
 * Time: 17:40
 */

class eventModel extends CI_Model {
    public function __construct()
    {
        $this->load->database(); //laad de database die in config/database.php is gespecifieerd
    }

    public function getEvents(){
        $query = $this->db->get('events'); //haalt alle machines op

        return $query->result_array(); //geeft het resultaat terug mee aan de controller
    }

    public function deleteEvent($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('events');
    }

    public function addEvent()
    {
        $name = $this->input->post('Name');
        $startDate = $this->input->post('StartDate');
        $endDate = $this->input->post('EndDate');
        $person = $this->input->post('Persons');


        $data = array(
            'name' => $name,
            'start' => $startDate,
            'end' => $endDate,
            'person' => $person,
        );

        $this->db->insert('events', $data);
    }
}


?>