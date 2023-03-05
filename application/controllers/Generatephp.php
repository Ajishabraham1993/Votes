<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generatephp extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('user_model');
		$this->load->model('reg_model');
	}
	
	public function index()
	{
		$vote = $this->user_model->get_quiz(1);
		echo $vote->vote_json;
	}
	public function generatevote()
	{
		
		for ($i = 1; $i <= 100; $i++) {
		$data = array();
		$answer = new stdClass();
		  $data['question'] = 'Question No. '.rand(1000,9999); // generate a random username
		  $answer->answer1 = 'Answer '.rand(1000,9999); // generate a random username
		  $answer->answer2 = 'Answer '.rand(1000,9999); // generate a random username
		  $answer->answer3 = 'Answer '.rand(1000,9999); // generate a random username
		  $answer->answer4 = 'Answer '.rand(1000,9999); // generate a random username
		  $data['answer'] = json_encode($answer); // generate a random username
		  $data['user_id'] = rand(1,1000);
		  $data['created_date'] = rand(1672531200,1667299200);
		  $data['exp_date'] = $data['created_date'] + rand(864000,15552000);
		  $randomAnswers = array('answer1','answer2','answer3','answer4');
		  $count = 0;
		  $voted_users=array();
		  foreach ($randomAnswers as $key => $value) {
		  	$voted_users[$value] = array();
				$random_count =  rand(1, 250);
				for ($j=0; $j < $random_count; $j++) {
				array_push($voted_users[$value],rand(1, 1000));
				$count++;
				}
			}

			$data['vote_count'] = $count;
			$data['vote_json'] = json_encode($voted_users);
		  
		  
		  
		  $this->user_model->add_quiz($data);
		}
		
	}
	
	public function generate_rndm_user()
	{
		$data = array();
		for ($i = 1; $i <= 1000; $i++) {
		  $data['user_name'] = 'user'.rand(1000,9999); // generate a random username
		  $data['user_pass'] = base64_encode(rand(10000,99999)); // generate a random password and encode with base64
		  $data['user_email'] = $data['user_name'].'@example.com'; // create a random email using username
		  $data['user_phone'] = '1'.rand(100,999).'-'.rand(100,999).'-'.rand(1000,9999); // generate a random phone number in US format
		  $this->reg_model->add_user($data);
		}
	}
	
}
