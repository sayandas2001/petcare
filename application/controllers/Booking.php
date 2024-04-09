<?php
class Booking extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data=array();
        $this->load->view('front/booking', $data);
    }
}
?>