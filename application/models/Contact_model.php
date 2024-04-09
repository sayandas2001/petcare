<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model
{
 
     public function getcontact($id){
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();

    }

    public function editcontact($contactInfo,$id){
        $this->db->where('id', $id);
        $this->db->update('contact', $contactInfo);
        return True;
    }

    public function getcontactInfoById($id)
    {
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('id', $id);
        $query= $this->db->get();
        return $query->row();

    }

    public function getcontactInfoALL()
    {
        $this->db->select('*');
        $this->db->from('contact');
        $query= $this->db->get();
        return $query->row();
    }
}
?>
