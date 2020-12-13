<?php
class model_admin_articles extends CI_Model{
	public function tampil_admin_data_articles(){
		$articles=$this->db->get('articles');
		return $articles;
	}
	public function add(){
		$articles= array(
			'judul' => $this->input->post('judul'),
			'oleh' => $this->input->post('oleh'),
			'isi' => $this->input->post('isi')
		);
		$this->db->insert('articles', $articles);
	}
	public function edit($id){
		$this->db->where('id',$id);
		$data=$this->db->get('articles');
		return $data;
	}
	public function add_edit(){
		$id=$this->input->post('id');
		$data= array(
			'judul' => $this->input->post('judul'),
			'oleh' => $this->input->post('oleh'),
			'isi' => $this->input->post('isi')
		);
		$this->db->where('id',$id);
		$this->db->update('articles', $data);
	}
	public function delete_articles($id){
		$this->db->where('id', $id);
		$this->db->delete('articles');
	}
}
?>