<?php
class model_admin_travelling extends CI_Model{
	public function tampil_admin_data_travelling(){
		$travelling=$this->db->get('travelling');
		return $travelling;
	}
	public function add(){
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size']    = 2048;
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar')){
			$gambar = $this->upload->data();
			$data = $gambar['file_name'];
			$travelling= array(
				'gambar' => $data,
				'nama' => $this->input->post('nama'),
				'ket' => $this->input->post('ket')
			);
			echo "<script>alert('Tersimpan')</script>";
			$this->db->insert('travelling', $travelling);
		}
	}
	public function edit($id){
		$this->db->where('id',$id);
		$data=$this->db->get('travelling');
		return $data;
	}
	public function add_edit(){
		$id=$this->input->post('id');
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size']    = 2048;
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar')){
			$gambar = $this->upload->data();
			$data = $gambar['file_name'];
			$travelling= array(
				'gambar' => $data,
				'nama' => $this->input->post('nama'),
				'ket' => $this->input->post('ket')
			);
			echo "<script>alert('Tersimpan')</script>";
		}
		$this->db->where('id',$id);
		$this->db->update('travelling', $travelling);
	}
	public function delete_travelling($id){
		$this->db->where('id', $id);
		$this->db->delete('travelling');
	}
}
?>