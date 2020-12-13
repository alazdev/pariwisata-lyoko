<?php
class login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_admin_login');
	}
	public function login(){
		$this->load->view('login');
	}
	public function proses_login(){
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');

		$data=$this->model_admin_login->cek_login($username, $password)->row_array();
		if ($username == $data['username'] && $password == $data['password']) {
			$session = array('username'=>$username,'status'=>'login');
			$this->session->set_userdata($session);
			redirect('admin','refresh');
		} else {
			echo "<script>alert('username atau Password Anda Salah')</script>";
			redirect('login/login','refresh');
		}
	}
	public function logout(){
		$logout = array('username','status');
		$this->session->unset_userdata($logout);
		redirect('login/login','refresh');
	}
	public function register(){
		$this->load->view('register');
	}
	public function registerkan(){
		$this->model_admin_login->add();
		redirect('login/login', 'refresh');
	}
}
?>