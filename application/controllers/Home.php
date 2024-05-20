<?php
class Home extends CI_Controller{

    function __construct(){
        parent::__construct(); 
        $this->load->model('Banner_model'); 
        $this->load->model('About_model');
        $this->load->model('Service_model');
        $this->load->model('Blog_model');
        $this->load->model('Assistance_model'); 
        $this->load->model('Contact_model');
        $this->load->model('Price_model'); 
        $this->load->model('Booking_model'); 
        $this->upload_path_about = UPLOAD_PATH.'about/';
        $this->upload_path_banner = UPLOAD_PATH.'banner/';
        $this->upload_path_service = UPLOAD_PATH.'service/';
        $this->upload_path_blog = UPLOAD_PATH.'blog/';
        $this->upload_path_assistance = UPLOAD_PATH.'assistance/';
        $this->upload_path_contact = UPLOAD_PATH.'contact/';
        $this->load->library(array('upload','image_lib'));
    }
    
    public function index()
    {
        $data['allbanner'] = $this->Banner_model->banner_listing();
        $data['aboutInfo'] = $this->About_model->getaboutInfoALL();
        $data['allservice'] = $this->Service_model->getservice();
        $data['allblog'] = $this->Blog_model->getblog();
        $data['allcare'] = $this->Assistance_model->getassistance();
        $data['contactinfo'] = $this->Contact_model->getcontactInfoALL();
        $data['allcost'] = $this->Price_model->getcost();
        $data['allbook'] = $this->Booking_model->getbook();
        //echo "<pre>"; print_r($data['allbook']); die;
        $this->load->view('front/index', $data);
    }
    
}
?>
