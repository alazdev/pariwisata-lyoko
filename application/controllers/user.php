<?php
class user extends CI_Controller{
	public function index(){
		$this->load->model('model_user_travelling');
		$this->load->model('model_user_articles');
		$this->load->model('model_user_comment');
		$data['travelling']=$this->model_user_travelling->tampil_user_data_travelling()->result_array();
		$data['articles']=$this->model_user_articles->tampil_user_data_articles()->result_array();
		$data['comment']=$this->model_user_comment->tampil_user_data_comment()->result_array();
		$this->load->view('include/header');
		$this->load->view('user_articles', $data);
		$this->load->view('user_travelling', $data);
		$this->load->view('user_comment', $data);
		$this->load->view('user_contact', $data);
		$this->load->view('include/footer');
	}
	public function add_comment(){
		$this->load->model('model_user_comment');
		$this->model_user_comment->add();
		redirect('user', 'refresh');
	}
	public function report(){
		$this->load->model('model_user_contact');
		$this->model_user_contact->report();
		redirect('user', 'refresh');
	}
}
?>