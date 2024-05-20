<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Price extends CI_Controller {
     
    public function __construct() {
    parent::__construct();
    $this->load->model('Price_model');     

    }

    public function index() {
        $data['allcost'] = $this->Price_model->getcost(); 
        $this->load->view("admin/Price/price_listing", $data);
    }

    public function add() {
        if (strtolower($_SERVER["REQUEST_METHOD"]) == 'post') {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required|trim');
            
            if ($this->form_validation->run() == TRUE) {
                $post_data = array(
                    'title' => $this->input->post('title'),
                    'price' => $this->input->post('price'),
                    'link' => $this->input->post('link'), 
                    'description' => $this->input->post('description')
                );

                //print_r($post_data); die;
                
                $this->Price_model->price_add($post_data); 
                
                $msg = 'Price has been successfully added.'; 
                $this->session->set_flashdata('success_msg', $msg);
                redirect(admin_url() . 'price', 'refresh');
            } else {
                $msg = validation_errors();
                $this->session->set_flashdata('error_msg', $msg);
                redirect(admin_url() . 'price/add');
            }
        } else {
            $this->load->view('admin/price/addprice');
        }
    }

    public function update($id) {
        $data['priceInfo'] = $this->Price_model->getpriceById($id);
        $this->load->view("admin/price/editprice", $data);
    }

    public function editprice() {
        $this->load->library('form_validation');
        $id = $this->input->post('id');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
    
        if ($this->form_validation->run() == false) {
     
            $this->session->set_flashdata('error', validation_errors());
            redirect(admin_url() . 'price', 'refresh');
        } else {
     
            $post_data = array(
                'title' => $this->input->post('title'),
                'price' => $this->input->post('price'),           
                'description' => $this->input->post('description'),
                'link' => $this->input->post('link')
            );
    
            $result = $this->Price_model->editprice($post_data, $id);
    
            if ($result) {
                $this->session->set_flashdata('success', 'Updated successfully');
            } else {
                $this->session->set_flashdata('error', 'Updation failed');
            }
    
            redirect(admin_url() . 'price', 'refresh');
        }
    }

    public function delete($id){
        $ses_info = $this->session->userdata('admin_session_data');
        $rslt = $this->Price_model->delete($id, $table_data); 
    
        $msg = 'price has been successfully deleted.';
        $this->session->set_flashdata('success_msg', $msg);
        redirect(admin_url() . 'price', 'refresh');
    }
    
}
    
   
?>        