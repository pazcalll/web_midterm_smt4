<?php defined('BASEPATH') OR exit('No direct script access allowed');
class lamp_model extends CI_Model{
    private $_table='tb_facility';
    public $fa_living_room;
    public $fa_bathroom;
    public $fa_dining_room;
    public $fa_bedroom;
    public $fa_kitchen;
    public $rm_id;

    // public function rules()
    // {
    //     # code...
    //     return [
    //         ['field' => '']
    //     ];
    // }
    public function tambahruang()
    {
        $data=[
            "id" => $this->input->post('id',true),
            "fa_living_room" => false,
            "fa_dining_room" => false,
            "fa_bathroom" => false,
            "fa_bedroom" => false,
            "fa_kitchen" => false
        ];
        $this->db->insert('tb_facility', $data);
    }
    public function getAll($id = null)
    {   
        if ($id === null) {
            # code...
            return $this->db->get($this->_table)->result_array();
        }else{
            return $this->db->get_where('tb_facility', ['id' => $id])->result_array();
        }
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,["id"=>$id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->rm_id = uniqid();
        $this->fa_bathroom = $post["fa_bathroom"];
        $this->fa_kitchen= $post["fa_kitchen"];
        $this->fa_bedroom = $post["fa_bedroom"];
        $this->fa_dining_room = $post["fa_dining_room"];
        $this->fa_living_room = $post["fa_livingroom"];
        $this->db->insert($this->_table,$this);
    }
    public function update()
    {
        $post=$this->input->post();
        $this->rm_id=$post["id"];
        $this->fa_bathroom = $post["fa_bathroom"];
        $this->fa_kitchen= $post["fa_kitchen"];
        $this->fa_bedroom = $post["fa_bedroom"];
        $this->fa_dining_room = $post["fa_dining_room"];
        $this->fa_living_room = $post["fa_livingroom"];
        return $this->db->update($this->_table, $this, array('id'=>$post['id']));
    }
    public function row_delete($id){
        // return $this->db->delete($this->_table, array("id"=>$id));
        $this->db->where('id', $id);
        $this->db->delete('tb_facility');
        return $this->db->affected_rows();
        // $this->delete();
    }
    public function row_post($data)
    {
        # code...
        $this->db->insert('tb_facility', $data);
        return $this->db->affected_rows();
    }

    public function row_update($data, $id)
    {
        $this->db->update('tb_facility', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function turnon($id)
    {
        // # code...
        // $this->load->database('lamp');
        // if($this->db->where('tb_facility.fa_living_room', $status)==false){
        //     $this->db->set('tb_facility.fa_living_room', false);
        //     $this->db->where('id', $id);
        // }else if ($this->db->where('tb_facility.fa_living_room', false)==true) {
        //     $this->db->set('tb_facility.fa_living_room', $status);
            // $this->db->where('id', $id);
        // }
        // $this->db->where('id', $id);
        // $this->db->set('fa_living_room',false);
        // $this->db->where('fa_living_room', $id);    
        $this->db->update('tb_facility', ['fa_living_room'=>true], ['id'=>$id]);
        // redirect('lamp/controlPage/'+$id+'/', 'refresh');
        // $this->db->update('tb_facility');
    }
    public function turnoff($id)
    {
        # code...
        // $this->db->set('fa_living_room',false);
        // $this->db->where('fa_living_room', $id);    
        // $this->db->update('tb_facility');
        $this->db->update('tb_facility', ['fa_living_room'=>false], ['id'=>$id]);
        // redirect('lamp', 'refresh');
    }
}
?>