<?php
class model_user_articles extends CI_Model{
	public function tampil_user_data_articles(){
		$articles=$this->db->get('articles');
		return $articles;
	}
}
?>