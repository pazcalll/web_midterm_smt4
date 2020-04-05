<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class lamp_api extends REST_Controller {

    // public function index()
    // {
    //     echo"Lamp management system";
    // }

    public function __construct($config= 'rest')
    {
        parent::__construct($config);
        $this->load->model("lamp_model");
        $this->load->library('form_validation');
        $this->load->database();
    }

    // public function index()
    // {
    //     // $data["lamp"]=$this->lamp_model->getAll();
    //     $data['title']='Lamp Management';
    //     $data['lamp']=$this->lamp_model->getAll();
    //     $this->load->view('template/header',$data);
    //     $this->load->view('room/index',$data);
    //     $this->load->view('template/footer');
    // }

    public function index_get()
    {
        $id=$this->get('id');
        // $this->db->where('rm_id', $id);
        if ($id===null) {
            $lamp=$this->db->get('tb_facility')->result_array();
            $this->response([
                'status'    => true,
                'message'   => 'all data',
                'data'      => $lamp
            ], REST_Controller::HTTP_OK);
        }
        else{
            $this->db->where('id',$id);
            $lamp=$this->db->get('tb_facility')->result_array();
            $this->response([
                'data'      => $lamp
            ], REST_Controller::HTTP_OK);
        }

    }

    public function index_delete()
    {
        $id = $this->delete('id');
        // $this->db->where('id', $id);
        // $delete = $this->db->delete('tb_facility');
        // if ($delete) {
        //     $this->response(array('status' => 'success'), 201);
        // }else{
        //     $this->response(array('status' => 'fail'), 502);
        // }
        if ($id === null) {
            $this->response([
                'status'    => false,
                'message'   => 'provide an ID'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if ($this->lamp_model->row_delete($id)>0) {
                # code...
                echo 'ok';
                $this->response([
                    'status'    => true,
                    'id'        => $id,
                    'message'   => 'deleted'
                ], REST_Controller::HTTP_NO_CONTENT);
            }else{
                echo 'not found';
                $this->response([
                    'status'    => false,
                    'message'   => 'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'id'   => $this->input->post('id'),
            'fa_living_room'        => false,
            'fa_bathroom'           => false,
            'fa_dining_room'        => false,
            'fa_bedroom'           => false,
            'fa_kitchen'           => false
        ];

        if ($this->lamp_model->row_post($data) > 0) {
            # code...
            $this->response ([
                'status'    => true,
                'message'   => 'new data is inserted',
                'data'      => $data
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status'    => false,
                'message'   => 'failed to insert new data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id=$this->put('id');
        $data = [
            // 'id'   => $this->input->put('id'),
            'fa_living_room'        => false,
            'fa_bathroom'           => false,
            'fa_dining_room'        => false,
            'fa_bedroom'           => false,
            'fa_kitchen'           => false
            // 'fa_living_room'        => $this->put('fa_living_room'),
            // 'fa_bathroom'           => $this->put('fa_bathroom'),
            // 'fa_dining_room'        => $this->put('fa_dining_room'),
            // 'fa_bedroom'           => $this->put('fa_bedroom'),
            // 'fa_kitchen'           => $this->put('fa_kitchen')
        ];
        if ($this->lamp_model->row_update($data, $id) > 0) {
            $this->response([
                'status'        => false,
                'message'       => 'failed to update data',
                'data'          => $data
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            $this->response([
                'status'        => true,
                'message'       => 'data has been updated',
                'data'          => $data
            ], REST_Controller::HTTP_OK);
        }
    }

}

/* End of file lamp.php */


?>