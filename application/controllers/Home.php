<?php
class Home extends CI_Controller{

    function __construct(){
        parent::__construct(); 
        $this->load->model('banner_model'); 
        $this->load->model('about_model');
        $this->load->model('service_model');
        $this->load->model('blog_model');
        $this->load->model('assistance_model'); 
        $this->load->model('contact_model'); 
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
        $data['allbanner'] = $this->banner_model->banner_listing();
        $data['aboutInfo'] = $this->about_model->getaboutInfoALL();
        $data['allservice'] = $this->service_model->getservice();
        $data['allblog'] = $this->blog_model->getblog();
        $data['allcare'] = $this->assistance_model->getassistance();
        $data['contactinfo'] = $this->contact_model-> getcontactInfoALL();

        //echo "<pre>"; print_r($data['contactinfo']); die;
        $this->load->view('front/index', $data);
    }
}
?>
