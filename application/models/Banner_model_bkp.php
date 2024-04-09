<?php
class Banner_model extends CI_Model
{
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

    public function GetBannerData(){
        $this->db->from('banner');
        $this->db->order_by("banner.id","desc");
        $result=$this->db->get();
        return $result->result();
    }

    public function GetAllBannerList($limit,$offset)
	{
		$this->db->select('banner.*');
		$this->db->from('banner');
		$this->db->where('banner.is_active!=','0');
		$this->db->order_by("banner.id", "desc");
		$this->db->limit($limit,$offset);
		$result=$this->db->get();
		//echo $this->db->last_query(); die();
		return $result->result();
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
    public function delete_banner($id,$data)
	{
		$this->db->where('id',$id);
		if($this->db->update('banner',$data))
		{
		   return true;
		}
		else
		{
		  return false;
		}
	}
}
?>
    


