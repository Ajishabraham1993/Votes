<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->model('user_model');
		if($this->session->userdata("user_name") == ''){
			redirect('register');
		}
	}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
	
	public function add_vote()
	{
		
		$this->load->view('header');
		$this->load->view('user');
		$this->load->view('footer');
	}
	public function edit_vote($q_id)
	{
		$data['quiz'] = $this->user_model->get_quiz($q_id);
		$this->load->view('header');
		$this->load->view('user',$data);
		$this->load->view('footer');
	}
	
	public function delete_vote()
	{
		$where['q_id'] = $this->input->post('v_id');
		$where['user_id'] = $this->session->userdata("user_id");
		
		$this->user_model->rem_quiz($where);
	}
	
	public function get_vote_by_date()
	{
		$dash_date = strtotime($this->input->post('dash_date'));
		
		$where['created_date'] = $dash_date;
		$where['user_id'] = $this->session->userdata("user_id");
		$result = $this->user_model->get_quiz_bydate($where);
		echo json_encode($result);
	}
	
	public function add_quiz()
	{
		$data['answer'] = json_encode($this->input->post('answer'));
		$data['question'] = $this->input->post('question');		
		$data['exp_date'] = strtotime($this->input->post('exp_date'));
		$data['created_date'] = strtotime(date('d-m-Y',time()));
		$where['q_id'] = $this->input->post('edit_fld');
		if($where['q_id']!='false'){
			$where['user_id'] = $this->session->userdata("user_id");
			$this->user_model->update_quiz($data,$where);
		}else{
			$data['user_id'] = $this->session->userdata("user_id");
			$this->user_model->add_quiz($data);
		}
		
	}
	
	public function update_vote()
	{
		$answer = $this->input->post('ans');
		$ans_arr = explode('_',$answer);
		
		$q_id = $ans_arr[0];
		$ans_indx = $ans_arr[1];
		$user_id = $this->session->userdata("user_id");
		$dta = array($ans_indx=>array($user_id));
		$quiz = $this->user_model->get_quiz($q_id);
		$votes=json_decode($quiz->vote_json,true);
		$votescnt=$quiz->vote_count;
		$votes = !empty($votes)?$votes:array();
		if(!empty($votes[$ans_indx])){ 
			array_push($votes[$ans_indx],$user_id);
		}else{
			$votes = array_merge($votes,$dta);
		}
		$data['vote_json'] = json_encode($votes);
		$data['vote_count'] = $votescnt+1;
		$this->user_model->add_vote($data,$q_id);
	}
	
	public function log_out()
	{
		$sessionclr = array('user_id','user_name');
		$this->session->unset_userdata($sessionclr);
		echo 'success';
	}
	public function show_vote()
	{
		$limit = 15;
		$curr = !empty($this->input->get('curr_page'))?$this->input->get('curr_page'):0;
		$start = $curr*$limit;
		$data['all_votes'] = $this->user_model->list_votes($limit, $start);
		$data['total_votes'] = $this->user_model->total_votes();
		$this->load->view('header');
		$this->load->view('list_votes',$data);
		$this->load->view('footer');
	}
	
}
