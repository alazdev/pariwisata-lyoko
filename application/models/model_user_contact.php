<?php
class model_user_contact extends CI_Model{
	public function tampil_user_data_contact(){
		$contact=$this->db->get('contact');
		return $contact;
	}
	public function report(){
		$contact= array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'message' => $this->input->post('message')
		);
		echo "<script>alert('Telah Terkirim')</script>";
		$this->db->insert('contact', $contact);
	}
}
?>