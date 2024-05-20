<?php
class Booking extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Booking_model'); 
    }

    public function index(){
        $data['allbook'] = $this->Booking_model->getbook();
         //echo "<pre>"; print_r($data['allbook']); die; 
        $this->load->view('front/booking', $data); 
    }
}
?>
