<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Price_model extends CI_Model {
    
    public function getcost() {
        $this->db->select('*');
        $this->db->from('price');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    public function price_add($data) {
        if ($this->db->insert('price', $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function getpriceById($id)
    {
        $this->db->select('*');
        $this->db->from('price');
        $this->db->where('id', $id);
        $query= $this->db->get();
        return $query->row();
    }

    public function editprice($priceInfo, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('price', $priceInfo);
        
        return TRUE;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("price");
        return true;             
    }
}

?>    