<?php 
/**
 * 
 */
 class Model_admin extends CI_Model
 {
 	
 	function login($user, $pass){
 		$this->db->select('*');
 		$this->db->where('user', $user);
 		$data = $this->db->get('t_admin')->row();
 		if (!empty($data->pass)) {
 			if ($pass == $data->pass) {
 				return 2;
 			} else {
 				return 0;
 			} 
 		} else {
 			return 1;
 		}
 	}

 	function accept_peminjaman($id, $tgl, $jam){
 		$data = array(
 			'tgl_acc' => $tgl,
 			'jam_acc' => $jam,
 			'status' => 2);
 		$this->db->where('id_pinjam', $id);
 		$this->db->update('t_pinjam', $data);
 	}

 	function reject_peminjaman($id, $tgl, $jam){
 		$data = array(
 			'tgl_acc' => $tgl,
 			'jam_acc' => $jam,
 			'status' => 0);
 		$this->db->where('id_pinjam', $id);
 		$this->db->update('t_pinjam', $data);
 	}

 } ?>