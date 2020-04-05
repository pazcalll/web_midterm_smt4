<?php defined('BASEPATH') OR exit('No direct script access allowed');
class lampp_model extends CI_Model{
    private $_table='lampp';
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

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,["rm_id"=>$id])->row();
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
        return $this->db->update($this->_table, $this, array('rm_id'=>$post['id']));
    }
    public function delete($id){
        return $this->db->delete($this->_table, array("rm_id"=>$id));
    }
}
?>