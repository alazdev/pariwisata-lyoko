<?php
class model_user_comment extends CI_Model{
	public function tampil_user_data_comment(){
		$comment=$this->db->get('comment');
		return $comment;
	}
	public function add(){
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size']    = 2048;
		$this->upload->initialize($config);
		if($this->upload->do_upload('foto')){
			$foto = $this->upload->data();
			$data = $foto['file_name'];
			$comment= array(
				'foto' => $data,
				'star' => $this->input->post('star'),
				'comment' => $this->input->post('comment'),
				'by' => $this->input->post('by')
			);
			echo "<script>alert('Comment Anda Tersimpan')</script>";
			$this->db->insert('comment', $comment);
		}
	}
}
?>