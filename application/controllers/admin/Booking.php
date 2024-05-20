<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends CI_Controller {
     
    public function __construct() {
        parent::__construct();
        $this->load->model('Booking_model');     
    }

    public function index() {
        $data['allbook'] = $this->Booking_model->getbook(); 
        //echo "hello"; die;
        $this->load->view("admin/Booking/booking_listing", $data);
    }
    public function add() {
        if (strtolower($_SERVER["REQUEST_METHOD"]) == 'post') {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Date', 'required|trim');
            $this->form_validation->set_rules('date', 'Date', 'required|trim');
            $this->form_validation->set_rules('service', 'Service', 'required|trim');
            
            if ($this->form_validation->run() == TRUE) {
                $post_data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'date' => $this->input->post('date'), 
                    'service' => $this->input->post('service')
                );

                //print_r($post_data); die;

                $this->Booking_model->booking_add($post_data); 
                
                $msg = 'Booking has been successfully added.'; 
                $this->session->set_flashdata('success_msg', $msg);
                redirect(admin_url() . 'booking', 'refresh');
            } else {
                $msg = validation_errors();
                $this->session->set_flashdata('error_msg', $msg);
                redirect(admin_url() . 'booking/add');
            }
        } else {
            $this->load->view('admin/booking/addbooking');
        }
    }

    public function update($id) {
        $data['bookingInfo'] = $this->Booking_model->getbookById($id);
        $this->load->view("admin/booking/editbooking", $data);
    }

    public function editbooking() {
        $this->load->library('form_validation');
        $id = $this->input->post('id');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Date', 'required|trim');
        $this->form_validation->set_rules('date', 'Date', 'required|trim');
        $this->form_validation->set_rules('service', 'Service', 'required|trim');
    
        if ($this->form_validation->run() == false) {
     
            $this->session->set_flashdata('error', validation_errors());
            redirect(admin_url() . 'booking', 'refresh');
        } else {
     
            $post_data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'date' => $this->input->post('date'), 
                'service' => $this->input->post('service')
            );
            //print_r($post_data); die;
    
            $result = $this->Booking_model->editbooking($post_data, $id);
    
            if ($result) {
                $this->session->set_flashdata('success', 'Updated successfully');
            } else {
                $this->session->set_flashdata('error', 'Updation failed');
            }
    
            redirect(admin_url() . 'booking', 'refresh');
        }
    }

    public function delete($id){
        $result = $this->Booking_model->delete($id);
        if ($result == true) {  
            $this->session->set_flashdata('success_msg', 'Data has been deleted successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Something wrong');
        }
        redirect(admin_url() . 'booking', 'refresh');
    }
    
}
?>
