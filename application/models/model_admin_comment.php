<?php
class model_admin_comment extends CI_Model{
	public function tampil_admin_data_comment(){
		$comment=$this->db->get('comment');
		return $comment;
	}
	public function delete_comment($id){
		return $this->db->delete('comment', array('id'=>$id));
	}
}
?>