<?php
class Price extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data=array();
        $this->load->view('front/price', $data);
    }
}
?>