<?php 
/**
 * 
 */
 class Model_user extends CI_model
 {
 	
 	function getAll(){
 		$this->db->select('*');
 		return $this->db->get('t_user');
 	}

 	//update profile
 	function UpdateProfile(){
 		$data = array(

				'nama_user' => $this->input->post('nama_user'),

				'NIM_NIP' => $_SESSION['NIM_NIP'],

				'user' => $this->input->post('user'),

				'pass' => $this->input->post('pass'));


			$this->db->where('id_user',$_SESSION['id']);
			$this->db->update('t_user', $data);
 	}

 	function getUserByNIM($nim){
 		$this->db->select('*');
 		$this->db->where('NIM_NIP', $nim);
 		return $this->db->get('t_user');
 	}

 	function addUser(){
 		$data = array(
 			'nama_user'		=> $this->input->post('nama_user'),
 			'status'		=> $this->input->post('status'),
 			'prodi'			=> $this->input->post('prodi'),
 			'email'			=> $this->input->post('nim_nip'),
 			'NIM_NIP'		=> $this->input->post('nim_nip'),
 			'user'			=> $this->input->post('nim_nip')
 		);
 		$this->db->insert('t_user', $data);
 	}

 	function deleteUser($id){
 		$this->db->where('NIM_NIP', $id);
 		$this->db->delete('t_user');
 	}

 	function updateUser($id){
 		$data = array(
 			'NIM_NIP'		=> $this->input->post('nim_nip'),
 			'nama_user'		=> $this->input->post('nama_user'),
 			'prodi'			=> $this->input->post('prodi')
 		);
 		$this->db->where('id_user', $id);
 		$this->db->update('t_user', $data);
 	}

 } ?>