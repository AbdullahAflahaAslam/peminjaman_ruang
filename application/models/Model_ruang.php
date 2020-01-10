<?php 
/**
* 
*/
class Model_ruang extends CI_model
{
	
	function getAll(){
		$this->db->select('*');
		return $this->db->get('ruang');
	}

	function addRuang(){
		$data = array(
			'nama_ruang' => $this->input->post('nama_ruang'));
		$this->db->insert('ruang', $data);
	}

	function deleteRuang($id){
		$this->db->where('id_ruang',$id);
		$this->db->delete('ruang');
	}

	function editRuang($id){
		$data = array(
			'nama_ruang' => $this->input->post('nama_ruang'));
		$this->db->where('id_ruang', $id);
		$this->db->update('ruang', $data);
	}

	function getJam(){
		$this->db->select('*');
		return $this->db->get('t_jam');
	}
	function getDaftarPinjam(){
		$this->db->select('*, t_pinjam.status as st');
		$this->db->from('t_pinjam, t_user,ruang');
		$this->db->where('ruang.id_ruang = t_pinjam.id_ruang');
		$this->db->where('t_user.id_user = t_pinjam.id_user');
		$this->db->where('t_pinjam.tgl_pinjam >='. date("Ymd"));
		$query = $this->db->get();
		return $query;
	}

	function getAllDaftarPinjam(){
		$this->db->select('*, t_pinjam.status as st');
		$this->db->from('t_pinjam, t_user,ruang');
		$this->db->where('ruang.id_ruang = t_pinjam.id_ruang');
		$this->db->where('t_user.id_user = t_pinjam.id_user');
		$query = $this->db->get();
		return $query;
	}

	//get peminjaman user aktif
	function getDaftarPinjamSaya($id){
		$this->db->select('*, t_pinjam.status as st');
		$this->db->from('t_pinjam, t_user,ruang');
		$this->db->where('t_pinjam.id_user',$id);
		$this->db->where('ruang.id_ruang = t_pinjam.id_ruang');
		$this->db->where('t_user.id_user = t_pinjam.id_user');
		$query = $this->db->get();
		return $query;
	}

	function getPinjam($id){
		$this->db->select('*, t_pinjam.status as st');
		$this->db->from('t_pinjam, t_user,ruang');
		$this->db->where('t_pinjam.id_pinjam',$id);
		$this->db->where('ruang.id_ruang = t_pinjam.id_ruang');
		$this->db->where('t_user.id_user = t_pinjam.id_user');
		$query = $this->db->get();
		return $query;
	}

	function pinjam(){
		$data = array(
				'id_user' => $this->input->post('id_user'),
				'id_ruang' => $this->input->post('id_ruang'),
				'keperluan'=>$this->input->post('keperluan'),
				'lembaga'=>$this->input->post('lembaga'),
				'tgl_pinjam'=>$this->input->post('tgl_pinjam'),
				'jam_mulai'=>$this->input->post('jam_mulai'),
				'jam_selesai'=>$this->input->post('jam_selesai'),
				'tgl_pengajuan'=>$this->input->post('tgl_pengajuan'),
				'jam_pengajuan'=>$this->input->post('jam_pengajuan'));	
			$this->db->insert('t_pinjam', $data);
	}

}

 ?>