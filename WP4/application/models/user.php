<?php

/**
 * Created by PhpStorm.
 * User: Brent
 * Date: 10/05/2017
 * Time: 16:15
 */
class User extends CI_Model
{
    public function __construct()
    {
        $this->load->database(); //laad de database die in config/database.php is gespecifieerd
    }

    function login($username, $password){
        $this->db->select('id', 'name', 'password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

}