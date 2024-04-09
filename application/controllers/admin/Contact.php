<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model'); 
    }

    public function fixed_contact($id)
    {
        $data['info'] = $this->Contact_model->getcontact($id);
        if($data['info']) {
            $this->load->view('admin/contact/fixed_contact', $data);
        } else {
            // Handle case when contact info is not found
            show_error('Contact not found', 404);
        }
    }

    public function editcontact($id)
    {
        $data['contactinfo'] = $this->Contact_model->getcontactInfoById($id);
        if($data['contactinfo']) {
            $this->load->view("contact/editcontact", $data);
        } else {
            // Handle case when contact info is not found
            show_error('Contact not found', 404);
        }
    } 

    public function contactedit()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $phone_no = $this->input->post('phone_no');

        $info = array(
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'phone_no' => $phone_no
        );

        //print_r($info); die;

        $result = $this->Contact_model->editcontact($info, $id);

        if($result)
        {
            $this->session->set_flashdata('success', 'Updated successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Updation failed');
        }
        
        redirect(admin_url() . 'contact/fixed_contact/1', 'refresh');
    }
}
?>
