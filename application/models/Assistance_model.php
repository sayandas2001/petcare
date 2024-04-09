<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Assistance_model extends CI_Model {
    
    public function getassistance() {
        $this->db->select('*');
        $this->db->from('assistance');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    public function assistance_add($data) {
        if ($this->db->insert('assistance', $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function getassistanceInfoById($id) {
        $this->db->select('*');
        $this->db->from('assistance');
        $this->db->where('id', $id);
        $query= $this->db->get();
        return $query->row();
    }

    public function editassistance($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('assistance', $data);
        return $this->db->affected_rows() > 0; 
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("assistance");
        return true;             
    }
}
?>
