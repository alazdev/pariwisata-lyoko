<?php
class model_admin_contact extends CI_Model{
	public function tampil_admin_data_contact(){
		$contact=$this->db->get('contact');
		return $contact;
	}
}
?>