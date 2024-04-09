<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connection extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Connection_model');
        $this->load->helper(array('url', 'form'));
        $this->load->library("pagination");
        $this->upload_path = UPLOAD_PATH.'connection/';
        $this->load->library(array('upload','image_lib'));    
    }    

    public function fixed_connection($id){
        $data['connect'] = $this->Connection_model->getInfo($id); 
        //print_r($data); die;
        $this->load->view('admin/connection/fixed_connection', $data); 
    }

    public function editconnection($id)
    {
        $data['Info'] = $this->Connection_model->getInfoById($id); 

        // print_r($data['Info']); die; 
        $this->load->view("connection/editconnection", $data); 
    } 

    public function connectionedit(){
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
    
        $connect = array(
            'title' => $title,
            'description' => $description
        );
    
        $data = array(); 
    
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){ 
              
            $config['upload_path'] = $this->upload_path . "original/";
            $config['allowed_types'] = 'jpg|jpeg|png|mp4'; 
            $config['max_size'] = '1000000'; // max_size in kb 
            $config['file_name'] = $_FILES['image']['name']; 
           
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
        
            if($this->upload->do_upload('image')){ 
              
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
                $data['response'] = 'successfully uploaded '.$filename; 
                $connect['image'] = $filename;
            }else{ 
                $data['response'] = 'failed'; 
            } 
        } else { 
            $data['response'] = 'failed'; 
        }
    
        $result = $this->Connection_model->connectionedit($connect, $id);
    
        if($result == true) {
            $this->session->set_flashdata('success', 'Updated successfully');
        } else {
            $this->session->set_flashdata('error', 'Updation failed');
        }
    
        redirect(admin_url() . 'connection/fixed_connection/' . $id, 'refresh');
    }
}    
?>
