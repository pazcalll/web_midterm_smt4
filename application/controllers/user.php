<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class user extends CI_Controller {
    
        public function __construct()
        {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');

        if($this->session->userdata('level')!="user"){
            redirect('login','refresh');
        }

        }

        public function index()
        {
            $this->load->view('lampp/user');
            
        }
    
    }
    
    /* End of file user.php */
    
?>