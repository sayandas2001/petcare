<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class About_model extends CI_Model
{
 
     public function getcontentInfo($id){
        $this->db->select('*');
        $this->db->from('about');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();

    }

    public function editabout($aboutInfo,$id){
        $this->db->where('id', $id);
        $this->db->update('about', $aboutInfo);
        return True;
    }

    public function getaboutInfoById($id)
    {
        $this->db->select('*');
        $this->db->from('about');
        $this->db->where('id', $id);
        $query= $this->db->get();
        return $query->row();

    }

    public function getaboutInfoALL()
    {
        $this->db->select('*');
        $this->db->from('about');
        $query= $this->db->get();
        return $query->row();
    }



    public function fixedcontentedit($aboutcontent,$id){
        $this->db->where('id',$id);
        $this->db->update('about', $aboutcontent);
        return True;
    
    }



}
?>
