<?php

/**
 * Created by PhpStorm.
 * User: Brent
 * Date: 9/05/2017
 * Time: 21:34
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

    }

    public function doLogin()
    {
        if(isset($_POST['username'])){
            $users=$this->db-get_where("persons", array("name =" =>$_POST['username'], "password =" =>$_POST['password']))->result();

            if(empty($users)){
                return FALSE;
            } else {
                return TRUE;
            }
        }

    }

}