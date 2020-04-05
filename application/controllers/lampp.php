<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class lampp extends REST_Controller {

    // public function index()
    // {
    //     echo"Lamp management system";
    // }

    public function __construct()
    {
        parent::__construct();
        $this->load->model("lampp_model");
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {
        // $data["lamp"]=$this->lamp_model->getAll();
        $data['title']='Lamp Management';
        $data['lampp']=$this->lampp_model->getAll();
        $this->load->view('template/header',$data);
        $this->load->view('room/index',$data);
        $this->load->view('template/footer');
        
    }

    public function index_get()
    {
        $id=$this->get('rm_id');
        if ($id == null) {
            $lampp=$this->lampp->getLamp();
        }
        else{
            $lampp=$this->lampp->getLamp($id);
        }
        if ($lampp) {
            $this->response([
                'status' => true,
                'data' => $lampp
            ], REST_Controller::HTTP_OK);
        }
        else{
            $this->response([
                'status' => false,
                'data' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

}

/* End of file lamp.php */


?>