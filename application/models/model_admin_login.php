<?php
class model_admin_login extends CI_Model{
	public function cek_login($username, $password){
		$this->db->where('username',$username);
        $this->db->where('password',$password);
        $logout=$this->db->get('login');
        return $logout;
	}
	public function add(){
		$register= array(
			'username' => $this->input->post('username'),
			'gender' => $this->input->post('gender'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		$this->db->insert('login', $register);
	}
}
?>