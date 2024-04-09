<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Banner extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('banner_model');
        //$this->isLoggedIn();
        $this->load->helper('url', 'form');
        $this->load->library("pagination");
        $this->upload_path = UPLOAD_PATH.'banner/';
		$this->load->library(array('upload','image_lib'));
    }

    public function index()
    {
        $data['allbanner'] = $this->banner_model->banner_listing();
        //echo "<pre>"; print_r($data['allbanner']); 

        $this->load->view("admin/banner/banner_listing",$data);
    }

    public function add()
    {
        if (strtolower($_SERVER["REQUEST_METHOD"]) == 'post'){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required|trim');
            //$this->form_validation->set_rules('link_url', 'URL ', 'required|is_unique[banner.link_url]');
    
            if ($this->form_validation->run() == TRUE) {
                $image = '';
                if(isset($_FILES['image']) && $_FILES['image']['name']!=""){
    
                    
                    $config['upload_path']   = $this->upload_path."original/";
                    $config['allowed_types'] = "jpg|jpeg|gif|png";
                    $config['max_size']      = '1000000'; //KB
    
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
    
                    if(!$this->upload->do_upload('image')){
                        $msg = $this->upload->display_errors(); // 'duplicate';
                        $this->session->set_flashdata('error_msg', $msg);
                        redirect(admin_url().'banner', 'refresh');
                    } else {
    
                        $image_data = $this->upload->data();
                        $image = $image_data['file_name'];
                    }
    
                }
                $post_data = array(
                    'title' => $this->input->post('title'),
                    'link_url' => $this->input->post('link_url'),
                    'image'=>$image,
                    'address' => $this->input->post('address'), // Added comma here
                    'created_at'=>date('Y-m-d H:i:s')
                );
    
                //print_r($post_data); die;
                $this->banner_model->banner_add($post_data);
    
                $msg = 'Banner has been successfully added.';
                $this->session->set_flashdata('success_msg', $msg);
                redirect(admin_url() . 'banner', 'refresh');
            } else {
                $msg = validation_errors();
                $this->session->set_flashdata('error_msg', $msg);
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }
        else {
            $this->load->view('admin/banner/addbanner');
    
        }
    
    }
    

    public function update($banner_id){
        $data['bannerInfo'] = $this->banner_model->getbannerInfoById($banner_id);
        //echo "<pre>"; print_r($data['bannerInfo']); die;
        $this->load->view("admin/banner/editbanner",$data);
    }

    public function editbanner()
{
    $this->load->library('form_validation');
    $banner_id = $this->input->post('banner_id');
    $this->form_validation->set_rules('title', 'Title', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
        $msg = validation_errors();
        $this->session->set_flashdata('error_msg', $msg);
        redirect($_SERVER['HTTP_REFERER']);
    } else {
        $filename = '';
        if ($_FILES['image']['name'] != "") {
            // Set preference 
            $config['upload_path'] = $this->upload_path."original/";
            $config['allowed_types'] = 'jpg|jpeg|png|mp4';
            $config['max_size'] = '100000'; // max_size in kb 
            $config['file_name'] = $_FILES['image']['name'];

            // Load upload library 
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // File upload
            if ($this->upload->do_upload('image')) {
                // Get data about the file
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            } else {
                $msg = $this->upload->display_errors();
                $this->session->set_flashdata('error_msg', $msg);
                redirect($_SERVER['HTTP_REFERER']);
            }
        }

        $post_data = array(
            'title' => $this->input->post('title'),
            'link_url' => $this->input->post('link_url'),
            'image' => $filename,
            'address' => $this->input->post('address'),
            'updated_at' => date('Y-m-d H:i:s')
        );

        $result = $this->banner_model->editbanner($post_data, $banner_id);

        if ($result == true) {
            $this->session->set_flashdata('success', 'Updated successfully');
        } else {
            $this->session->set_flashdata('error', 'Updation failed');
        }

        redirect(admin_url() . 'banner', 'refresh');
    }
}


    public function delete($banner_id){
        $ses_info = $this->session->userdata('admin_session_data');
        $table_data = array('is_active' => '0', 'updated_date' => date('Y-m-d H:i:s'), 'deleted_date' => date('Y-m-d H:i:s'));
        $rslt = $this->banner_model->delete($banner_id, $table_data); 
    
        $msg = 'Banner has been successfully deleted.';
        $this->session->set_flashdata('success_msg', $msg);
        redirect(admin_url() . 'banner', 'refresh');
    }


    public function contentedit(){
        $link_url = $this->input->post('link_url');
        
        $bannerInfo= array('title'=>$title,'image'=>$image, 'link_url'=>$link_url);
    
    
    
    }

    public function address(){
        $address = $this->input->post('address');

    }
}
?>