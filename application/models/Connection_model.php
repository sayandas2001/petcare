<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Connection_model extends CI_Model
{
 
     public function getInfo($id){
        $this->db->select('*');
        $this->db->from('connection');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();

    }

    public function connectionedit($Info,$id){
        $this->db->where('id', $id);
        $this->db->update('connection', $Info);
        return True;
    }

    public function getInfoById($id)
    {
        $this->db->select('*');
        $this->db->from('connection');
        $this->db->where('id', $id);
        $query= $this->db->get();
        return $query->row();

    }
}    
?>    