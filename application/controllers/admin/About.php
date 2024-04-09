<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('About_model'); 
        $this->load->helper('url', 'form');
        $this->load->library("pagination");
        $this->upload_path = UPLOAD_PATH.'about/';
		$this->load->library(array('upload','image_lib'));
    }


    
    public function fixed_content($id){
        $data['aboutcontent'] = $this->About_model->getcontentInfo($id);
        $this->load->view('admin/about/fixed_content',$data);
    }

    public function editabout($id)
    {
        $data['aboutInfo'] = $this->About_model->getaboutInfoById($id);
        $this->load->view("about/editabout", $data);
        

    } 

    public function fixedcontentedit(){
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $image = $this->input->post('image');
        $description = $this->input->post('description');
        $link = $this->input->post('link');

        $aboutcontent= array('title'=>$title,'image'=>$image,'description'=>$description, 'link'=>$link);

        //print_r($aboutcontent); die;

        $data = array(); 
        if($_FILES['image']['name']!=""){ 
                // Set preference 
            $config['upload_path'] = $this->upload_path."original/";
            $config['allowed_types'] = 'jpg|jpeg|png|mp4'; 
            $config['max_size'] = '100000'; // max_size in kb 
            $config['file_name'] = $_FILES['image']['name']; 
                // Load upload library 
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
        
                // File upload
            if($this->upload->do_upload('image')){ 
                // Get data about the file
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
                $data['response'] = 'successfully uploaded '.$filename; 
                $aboutcontent['image']=$filename;
            }else{ 
                $data['response'] = 'failed'; 
            } 
        }else{ 
            $data['response'] = 'failed'; 
        }

        $result = $this->About_model->fixedcontentedit($aboutcontent, $id);

        if($result == true)
        {
            $this->session->set_flashdata('success', 'Updated successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Updation failed');
        }
        //redirect('About/fixed_content/1');
        redirect(admin_url() . 'about/fixed_content/1', 'refresh');
        
    } 


    
}
?>