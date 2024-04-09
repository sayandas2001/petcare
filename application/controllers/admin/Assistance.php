<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Assistance extends CI_Controller {
     
    public function __construct() {
        parent::__construct();
        $this->load->model('Assistance_model'); 
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('pagination', 'upload', 'form_validation', 'session'));
        $this->upload_path = UPLOAD_PATH.'assistance/';
    }

    public function index() {
        $data['allcare'] = $this->Assistance_model->getassistance(); 
        $this->load->view("admin/Assistance/assistance_listing", $data);
    }

    public function add() {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $this->form_validation->set_rules('title', 'Title', 'required|trim');

            if ($this->form_validation->run() == TRUE) {
                $image = '';
                if(isset($_FILES['image']) && $_FILES['image']['name']!=""){
                    $config['upload_path']   = $this->upload_path."original/";
                    $config['allowed_types'] = "jpg|jpeg|gif|png";
                    $config['max_size']      = '10000000'; //KB
    
                    $this->upload->initialize($config);
    
                    if(!$this->upload->do_upload('image')){
                        $msg = $this->upload->display_errors(); // 'duplicate';
                        $this->session->set_flashdata('error_msg', $msg);
                        redirect(admin_url().'assistance', 'refresh');
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
    
                $this->Assistance_model->assistance_add($post_data); 
    
                $msg = 'Assistance has been successfully added.';
                $this->session->set_flashdata('success_msg', $msg);
                redirect(admin_url() . 'assistance', 'refresh');
            } else {
                $msg = validation_errors();
                $this->session->set_flashdata('error_msg', $msg);
                redirect(admin_url() . 'assistance/add'); 
            }
        } else {
            $this->load->view('admin/assistance/addassistance');
        }
    }

    public function update($id) {
        $data['assistanceInfo'] = $this->Assistance_model->getassistanceInfoById($id);
        $this->load->view("admin/assistance/editassistance", $data);
    }

    public function editassistance() {
        $id = $this->input->post('id');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
    
        if ($this->form_validation->run() == FALSE) {
            $msg = validation_errors();
            $this->session->set_flashdata('error_msg', $msg);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $filename = '';
            if (!empty($_FILES['image']['name'])) { // Check if file is selected for upload
                // Set preferences 
                $config['upload_path'] = $this->upload_path."original/";
                $config['allowed_types'] = 'jpg|jpeg|png|mp4';
                $config['max_size'] = 100000; // max_size in kb 
                $config['file_name'] = $_FILES['image']['name'];
    
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
                'image' => $filename, // Update with the new filename
                'description' => $this->input->post('description')
            );

            $this->Assistance_model->editassistance($id, $post_data); 
    
            // Redirect to the appropriate page
            redirect(admin_url() . 'assistance', 'refresh');
        }
    }

    public function delete($id){
        $ses_info = $this->session->userdata('admin_session_data');
        $rslt = $this->Assistance_model->delete($id, $table_data); 
    
        $msg = 'assistance has been successfully deleted.';
        $this->session->set_flashdata('success_msg', $msg);
        redirect(admin_url() . 'assistance', 'refresh');
    }
}
?>
