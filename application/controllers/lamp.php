<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');
$data['title']='Lamp Management';
class lamp extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("lamp_model");
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {
        // $data["lamp"]=$this->lamp_model->getAll();
        $data['title']='Lamp Management';
        $data['lamp']=$this->lamp_model->getAll();
        $this->load->view('template/header',$data);
        $this->load->view('room/index',$data);
        $this->load->view('template/footer');
    }
    
    public function user()
    {
        $data['title']='Lamp Controller';
        $data['id']=1;
        $data['on']='OFF';
        // echo $id;
        $this->load->view('template/header',$data);
        $this->load->view('room/control',$data);
        $this->load->view('template/footer');
    }

    public function row_delete($id)
    {
        $this->lamp_model->row_delete($id);
        $this->session->set_flashdata('flash-data', 'deleted');
        redirect('lamp', 'refresh');
    }

    public function controlPage($id)
    {
        $data['title']='Lamp Controller';
        $data['id']=$id;
        $data['on']='OFF';
        // echo $id;
        $this->load->view('template/header',$data);
        $this->load->view('room/control',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        # code...
        $data['title']= 'Form to Add More Rooms';
        $this->form_validation->set_rules('id', 'Id', 'required');
        // $this->form_validation->set_rules('', 'fieldlabel', 'trim|required|min_length[5]|max_length[12]');
        if ($this->form_validation->run()==FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('room/tambah',$data);
            $this->load->view('template/footer');
        }
        else{
            $this->lamp_model->tambahruang();
            $this->session->set_flashdata('flash-data','Added');
            redirect('lamp','refresh');
        }
    }

    // public function switches($id)   
    // {
    //     # code...
    //     $data['title']='Lamp Controller';
    //     $data['id']=$id;
    //     $this->load->view('template/header', $data);
    //     $this->load->view('room/control', $data);
    //     $this->load->view('template/header');
    //     // redirect('lamp', 'refresh');
    // }
    public function turnon($id)
    {
        # code...
        $data['title']='Lamp Controller';
        $data['id']=$id;
        $data['on']='ON';
        // echo $id;
        $this->load->view('template/header',$data);
        $this->lamp_model->turnon($id);
        $this->load->view('room/control',$data);
        $this->load->view('template/footer');
    }
    public function turnoff($id)
    {
        # code...
        $data['title']='Lamp Controller';
        $data['id']=$id;
        $data['on']='OFF';
        // echo $id;
        $this->load->view('template/header',$data);
        $this->lamp_model->turnoff($id);
        $this->load->view('room/control',$data);
        $this->load->view('template/footer');
    }
}
?>