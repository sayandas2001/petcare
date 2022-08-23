<?php
class Home extends CI_Controller{

	function __construct(){
		parent :: __construct();
		$this->load->model(array('')); 
	}
	
	public function index()
    {
		//$data['AllMainCatevent'] = $this->onlinedonation_model->GetAllMaincatListHome();
        $this->load->view('front/index');

    }
}
?>