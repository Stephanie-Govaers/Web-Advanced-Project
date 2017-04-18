<?php
/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 18/04/2017
 * Time: 14:01
 */
class WP2PageController extends CI_Controller{
    public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page);
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('pages/'. $page, $data);
    }
}