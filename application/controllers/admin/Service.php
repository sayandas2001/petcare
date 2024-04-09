<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct() {
    parent::__construct();
    $this->load->model('Service_model'); 
    $this->load->helper('url', 'form');
    $this->load->library("pagination");
    $this->upload_path = UPLOAD_PATH.'service/';
    $this->load->library(array('upload','image_lib'));
    }
  
    public function index() {
        $data['allservice'] = $this->Service_model->getservice(); 
        $this->load->view("admin/service/service_listing",$data);
    }

    public function add() 
    {
        if (strtolower($_SERVER["REQUEST_METHOD"]) == 'post'){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required|trim');
            
    
            if ($this->form_validation->run() == TRUE) {
                $image = '';
                if(isset($_FILES['image']) && $_FILES['image']['name']!=""){
    
                    
                    $config['upload_path']   = $this->upload_path."original/";
                    $config['allowed_types'] = "jpg|jpeg|gif|png";
                    $config['max_size']      = '10000000'; //KB
    
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
    
                    if(!$this->upload->do_upload('image')){
                        $msg = $this->upload->display_errors(); // 'duplicate';
                        $this->session->set_flashdata('error_msg', $msg);
                        redirect(admin_url().'service', 'refresh');
                    } else {
    
                        $image_data = $this->upload->data();
                        $image = $image_data['file_name'];
                    }
    
                }
                $post_data = array(
                    'title' => $this->input->post('title'),
                    'image' => $image,
                    'description' => $this->input->post('description')
                );

                //print_r($post_data); die;
    
                $this->Service_model->service_add($post_data); 
    
                $msg = 'Service has been successfully added.';
                $this->session->set_flashdata('success_msg', $msg);
                redirect(admin_url() . 'service', 'refresh');
            } else {
                $msg = validation_errors();
                $this->session->set_flashdata('error_msg', $msg);
                redirect(admin_url() . 'service/add'); 
            }
        } else {
            $this->load->view('admin/service/addservice');
        }
    }

    public function update($id) {
        $data['serviceInfo'] = $this->Service_model->getserviceInfoById($id);
        $this->load->view("admin/service/editservice", $data);
    }

    public function editservice() {
        $this->load->library('form_validation');
        $id = $this->input->post('id');
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
                'image' => $filename,
                'description' => $this->input->post('description')
            );

            $result = $this->Service_model->editservice($post_data, $id);

            if ($result == true) {
                $this->session->set_flashdata('success', 'Updated successfully');
            } else {
                $this->session->set_flashdata('error', 'Updation failed');
            }

            redirect(admin_url() . 'service', 'refresh');
        }
    }

    public function delete($id){
        $ses_info = $this->session->userdata('admin_session_data');
        $rslt = $this->Service_model->delete($id, $table_data); 
    
        $msg = 'service has been successfully deleted.';
        $this->session->set_flashdata('success_msg', $msg);
        redirect(admin_url() . 'service', 'refresh');
    }


}
?>