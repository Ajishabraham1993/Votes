<?php

class User_model extends CI_Model {
	
	function add_quiz($data){
		$this->db->insert('quiz',$data);
	}
	function add_vote($data,$q_id){
		$this->db->where('q_id',$q_id)->update('quiz',$data);
	}
	function get_quiz_bydate($where){
		$query = $this->db->from('quiz')->where($where)->get();
		return $query->result();
	}
	function update_quiz($data,$where){
		$this->db->where($where)->update('quiz',$data);
	}
	function rem_quiz($where){
		$this->db->where($where)->delete('quiz');
	}
	function check_user($mail){
		$this->db->select('user_email')->from('user_reg')->where('user_email',$mail);
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	function get_quiz($q_id){
		$this->db->select('*')->from('quiz')->where('q_id',$q_id);
		$query = $this->db->get();
		return $query->row();
	}
	function list_votes($limit, $start){
		$this->db->select('*')->from('quiz');
		$this->db->order_by("vote_count", "desc");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query->result();
	}
	
	function total_votes(){
		$this->db->select('q_id')->from('quiz');
		$query = $this->db->get();
		return $query->num_rows();
	}
	
}


?>