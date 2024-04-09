<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{
    private $upload_path = '';
    private $image_medium_width = 398;
    private $image_medium_height = 210;
    function __construct()
    {
        parent::__construct();
        init_admin_element();
        is_admin_logged_in();
        $this->load->helper('url', 'form');
        $this->load->library("pagination");
        $this->load->model(array('admin_model','banner_model'));
        $this->upload_path = UPLOAD_PATH.'banner/';
		$this->load->library(array('upload','image_lib'));
    }

    public function index()
    {
        $data = array();
        $ses_info = $this->session->userdata('admin_session_data');
        $admin_id = $ses_info['admin_id'];
        $getParams = $this->input->get();
        if (isset($getParams['page'])) {
            $page = $getParams['page'];
        } else {
            $page = 1;
        }

        $config = [
            'base_url'          => admin_url() . "banner/index",
            'per_page'          => 20,
            'total_rows'        => $this->banner_model->num_rows()
        ];
        $this->pagination->initialize($config);
        $offset = ($page - 1) * 20;
        $data['AllBanner'] = $this->banner_model->GetAllBannerList($config['per_page'], $offset);

        $this->load->view('admin/banner/banner_list', $data);
    }
    
    
    public function add()
    {
        if (strtolower($_SERVER["REQUEST_METHOD"]) == 'post') {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Banner Title', 'required|trim');
            //$this->form_validation->set_rules('link_url', 'URL ', 'required|is_unique[banner.link_url]');

            if ($this->form_validation->run() == TRUE) {
                $image = '';
	            if(isset($_FILES['banner_image']) && $_FILES['banner_image']['name']!=""){

	                
	                $config['upload_path']   = $this->upload_path."original/";
	                $config['allowed_types'] = "jpg|jpeg|gif|png";
	                $config['max_size']      = '1000000'; //KB

	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);

	                if(!$this->upload->do_upload('banner_image')){
	                    $msg = $this->upload->display_errors(); // 'duplicate';
			            $this->session->set_flashdata('error_msg', $msg);
			            redirect(admin_url().'banner', 'refresh');
	                } else {

	                    $image_data = $this->upload->data();
	                    $image = $image_data['file_name'];
	                }

	            }
                $post_data = array(
                    'title' => $this->input->post('title'),
                    'banner_image' => $image,
                    'short_desc' => $this->input->post('short_desc'),
                    'link_url' => $this->input->post('link_url'),
                );


                $this->banner_model->banner_add($post_data);
  
                $msg = 'Banner has been successfully added.';
                $this->session->set_flashdata('success_msg', $msg);
                redirect(admin_url() . 'banner', 'refresh');
            } else {
                $msg = validation_errors();
                $this->session->set_flashdata('error_msg', $msg);
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        } else {
            $this->load->view('admin/banner/add');
        }
    }

    public function delete($banner_id)
    {

            $id = base64_decode($banner_id);
            $ses_info = $this->session->userdata('admin_session_data');
            $table_data = array('is_active' => '0', 'updated_date' => date('Y-m-d H:i:s'), 'deleted_date' => date('Y-m-d H:i:s'));
            $rslt = $this->banner_model->delete_banner($id, $table_data);

            $msg = 'Banner has been successfully deleted.';
            $this->session->set_flashdata('success_msg', $msg);
            redirect(admin_url() . 'banner', 'refresh');
            //exit;
        // }
    }

                   

}
?>

    

    
        
     