<?php
class admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_admin_travelling');
		$this->load->model('model_admin_articles');
		$this->load->model('model_admin_comment');
		$this->load->model('model_admin_contact');
		$this->load->model('model_admin_login');
	}
	public function index(){
		$data['travelling']=$this->model_admin_travelling->tampil_admin_data_travelling()->result_array();
		$data['articles']=$this->model_admin_articles->tampil_admin_data_articles()->result_array();
		$data['comment']=$this->model_admin_comment->tampil_admin_data_comment()->result_array();
		$data['contact']=$this->model_admin_contact->tampil_admin_data_contact()->result_array();
		$this->load->view('include/header_2');
		$this->load->view('admin_articles', $data);
		$this->load->view('admin_travelling', $data);
		$this->load->view('admin_comment', $data);
		$this->load->view('admin_contact', $data);
		$this->load->view('include/footer');
	}

	//articles
	public function admin_add_articles(){
		$this->load->view('articles');
	}
	public function add_articles(){
		$this->model_admin_articles->add();
		redirect('admin', 'refresh');
	}
	public function add_edit_articles($id){
		$data['articles']=$this->model_admin_articles->edit($id)->row_array();
		$this->load->view('edit_articles', $data);
	}
	public function edit_articles(){
		$this->model_admin_articles->add_edit();
		redirect('admin','refresh');
	}
	public function delete_articles($id){
		$this->model_admin_articles->delete_articles($id);
		redirect('admin','refresh');
	}

	//travelling
	public function admin_add_travelling(){
		$this->load->view('travelling');
	}
	public function add_travelling(){
		$this->model_admin_travelling->add();
		redirect('admin', 'refresh');
	}
	public function add_edit_travelling($id){
		$data['travelling']=$this->model_admin_travelling->edit($id)->row_array();
		$this->load->view('edit_travelling', $data);
	}
	public function edit_travelling(){
		$this->model_admin_travelling->add_edit();
		redirect('admin','refresh');
	}
	public function delete_travelling($id){
		$this->model_admin_travelling->delete_travelling($id);
		redirect('admin','refresh');
	}

	//coment
	public function delete_comment($id){
		$this->model_admin_comment->delete_comment($id);
		redirect('admin','refresh');
	}
}
?>