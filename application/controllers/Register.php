<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('reg_model');
		$this->load->model('login_model');
		/*if($this->session->userdata("user_name") == ''){
			redirect('login');
		}*/
	}
	
	public function index()
	{
		
		if($this->input->post('submit') != ''){
			$this->add_user_data();
		}
		$this->load->view('register_form');
	}
	
	public function add_user_data(){
		$data['user_name'] = $this->input->post('user_name');
		$data['user_email'] = $mail = $this->input->post('user_email');
		$pass = $this->input->post('user_pass');
		$data['user_pass'] = base64_encode($pass);
		$data['user_phone'] = $this->input->post('user_phone');
		
		$user = $this->check_user($mail);
		if($user > 0){
			echo "user_exists";
			return false;
		}	
		
		$this->reg_model->add_user($data);
		echo "success";
	}
	
	public function userpass_validation()
	{
		$user_name = $this->input->post('user_email');
		$pass = $this->input->post('user_pass');
		$data = $this->login_model->get_user($user_name,$pass);
		if($data['num'] > 0){
			$session = array('user_name'=>$data['result']->user_name,'user_id'=>$data['result']->user_id);
		    $this->session->set_userdata($session);
		    echo "success";
		    return false;
		}else{
			echo "no_err";
		    return false;
		}
	}
	public function image_upload(){
		$path = APPPATH.'../uploads/';
		$config = array(
		'upload_path' => $path,
		'allowed_types' => 'jpg|jpeg|png',
		'max_size' => '2000000',
		'overwrite' => TRUE,
		);
		$this->load->library('upload',$config);
		if($this->upload->do_upload('user_image')){
			return  array('status' => 1 ,'data' => $this->upload->data());
		}else{
			
			return  array('status' => 0 ,'data' => $this->upload->display_errors());
		}
	}
	public function check_user($mail){
		$user = $this->reg_model->check_user($mail);
		return $user;
	}
}
