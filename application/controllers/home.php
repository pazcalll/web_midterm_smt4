<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class home extends CI_Controller {
    
        public function index()
        {
            $data['title'] = 'Home';
            $this->load->view('template/header', $data);
            $this->load->view('home/index', $data);
            $this->load->view('template/footer');
            $this->load->library('session');
            
            if($this->session->userdata('level')!="admin"){
                redirect('login','refresh');
            }
        }
    
    }
    
    /* End of file home.php */
    
?>