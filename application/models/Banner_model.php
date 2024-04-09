<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class banner_model extends CI_Model
{
    public function banner_listing()
    {
        $this->db->select('*');
        $this->db->from('banner');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function banner_add($data)
    {
        if($this->db->insert('banner',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function getbannerInfoById($banner_id)
    {
        $this->db->select('*');
        $this->db->from('banner');
        $this->db->where('banner_id', $banner_id);
        $query= $this->db->get();
        return $query->row();
    }

    public function editbanner($bannerInfo, $banner_id)
    {
        $this->db->where('banner_id', $banner_id);
        $this->db->update('banner', $bannerInfo);
        
        return TRUE;
    }

    public function delete($banner_id)
    {
        $this->db->where('banner_id', $banner_id);
        $this->db->delete("banner");
        return true;             
    }

}
?>    