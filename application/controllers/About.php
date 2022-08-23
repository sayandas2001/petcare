<?php
class About extends CI_Controller{

    function __construct(){
		parent :: __construct();
		$this->load->model(array('')); 
	}

    public function index(){
        $this->load->view('front/about');
    }
}    
?>