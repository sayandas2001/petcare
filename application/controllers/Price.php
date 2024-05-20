<?php
class Price extends CI_Controller{

    function __construct(){
    parent::__construct();
    $this->load->model('price_model');
    }

    public function index()
    {
        $data['allcost'] = $this->price_model->getcost();
        //echo "<pre>"; print_r($data['allcost']); die;
        $this->load->view('front/price', $data);
    }
}
?>