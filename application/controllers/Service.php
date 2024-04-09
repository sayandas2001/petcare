<?php
class Service extends CI_Controller{

    function __construct(){
    parent::__construct();
    $this->load->model('service_model');
    $this->upload_path_service = UPLOAD_PATH.'service/';
    $this->load->library(array('upload','image_lib'));

    }
    
    public function index()
    {
        $data['allservice'] = $this->service_model->getservice();
        //echo "<pre>"; print_r($data['allservice']); die;
        $this->load->view('front/service', $data);
    }
}
?>
