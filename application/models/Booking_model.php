<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Booking_model extends CI_Model {
    
    public function getbook() {
        $this->db->select('*');
        $this->db->from('booking');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    public function booking_add($data) {
        if ($this->db->insert('booking', $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function getbookById($id)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('id', $id);
        $query= $this->db->get();
        return $query->row();
    }

    public function editbooking($bookingInfo, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('booking', $bookingInfo);
        
        return TRUE;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('booking');
        return true;             
    }

}
?>    