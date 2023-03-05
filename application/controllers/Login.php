<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
	
	public function index()
	{
		
		if($this->input->post('submit') != ''){
			$this->userpass_validation();
		}
		$this->load->view('login');
	}
	
	public function userpass_validation()
	{
		$user_name = $this->input->post('user_email');
		$pass = $this->input->post('user_pass');
		$data = $this->login_model->get_user($user_name,$pass);
		if($data['num'] > 0){
			$session = array('user_name'=>$data['result']->user_name,'user_id'=>$data['result']->user_id);
		    $this->session->set_userdata($session);
		    redirect('user');
		}else{
			$session = array('error'=>'User name or Password is not correct!');
		    $this->session->set_userdata($session);
		    return false;
		}
	}
	
}
