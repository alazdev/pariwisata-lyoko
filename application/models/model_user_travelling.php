<?php
class model_user_travelling extends CI_Model{
	public function tampil_user_data_travelling(){
		$travelling=$this->db->get('travelling');
		return $travelling;
	}
}
?>