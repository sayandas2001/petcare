<?php

class Banner_model extends CI_Model{
    function __construct() 
	{
		parent::__construct();
		//$this->load->database();		
	}

    public function num_rows()
    {
        $this->db->select('banner.*');
        $this->db->from('banner');
        $this->db->where('banner.is_active!=','0');
        $this->db->order_by("banner.id","desc");
        $result=$this->db->get();
        return $result->num_rows();
    }

    public function GetBannerData($limit,$offset){
        $this->db->select('banner.*');
        $this->db->from('banner');
        $this->db->where('banner.is_active!=','0');
        $this->db->order_by("banner.id","desc");
        $this->db->limit($limit,$offset);
        $result=$this->db->get();
        return $result->result();
    }
    
}

?>