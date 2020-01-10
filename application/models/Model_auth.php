<?php 
/**
* 
*/
class Model_Auth extends CI_model
{
		
		function get(){

			$pass = $this->input->post('pass');

			$user = strtoupper($this->input->post('user'));

			$this->db->select('*');

			$this->db->where('user', $user);

			$query = $this->db->get('t_user')->row();

			if (!empty($query->pass)) {

				if ($pass == $query->pass) {

					return $query;

				} else {

					return 0;

				}

			} else {

				return 0;

			}

		}

		function getID(){

			$pass = $this->input->post('pass');

			$user = strtoupper($this->input->post('user'));

			$this->db->select('*');

			$this->db->where('user', $user);

			$query = $this->db->get('t_user')->row();

			if (!empty($query->pass)) {

				if ($pass == $query->pass) {

					return $query->id_user;

				} else {

					return 0;

				}

			} else {

				return 0;

			}

		}

	function login(){

			$user = $this->input->post('user');

			$pass = $this->input->post('pass');

			//$pass = md5($this->input->post('pass'));

			$this->db->select('pass');

			$this->db->where('user', $user);

			$this->db->or_where('NIM_NIP', $user );

			$data = $this->db->get('t_user')->row();

			if (!empty($data->pass)){

				if($pass == $data->pass){
					return 2;
				}

				else {

					return 0;
				}
			}

			else {

				return 1;

			}

		}



	function namaUser(){

			$pass = $this->input->post('pass');

			$user = strtoupper($this->input->post('user'));

			$this->db->select('*');

			$this->db->where('user', $user);

			$query = $this->db->get('t_user')->row();

			if (!empty($query->pass)) {

				if ($pass == $query->pass) {

					return $query->nama_user;

				} else {

					return 0;

				}

			} else {

				return 0;

			}

		}	

		function CekNim(){

			$nim =strtoupper($this->input->post('NIM_NIP'));

			$this->db->select('*');

			$this->db->where('NIM_NIP', $nim);

			$data = $this->db->get('t_user')->row();

			//jika ada data

			if (!empty($data->NIM_NIP)){

				//jika sudah ada password atau account has been registered

				if (!empty($data->pass)){
					return 2;
				}
				// di ijinkan register ketika nim ada dan pass kosong
				else{
					return 1;
				}
				
			}
			///ketika data nim tidak ada atau invalid
			else {

				return 0;

			}

		}

		function save(){

			$data = array(

				'nama_user' => $this->input->post('nama_user'),

				'tgl_lahir' => $this->input->post('tgl_lahir'),

				'status' => $this->input->post('status'),

				'fakultas' => $this->input->post('fakultas'),

				'prodi' => $this->input->post('prodi'),

				'no_telp' => $this->input->post('no_telp'),

				'email' => $this->input->post('email'),

				'user' => $this->input->post('user'),

				'pass' => $this->input->post('pass'));

			$this->db->where('NIM_NIP',$this->input->post('NIM_NIP'));
			$this->db->update('t_user', $data);

		}

		//cek data ada atau tidak
		
		
		function forgetpass(){

			$key = $this->input->post('key');

			$this->db->select('email');

			$this->db->select('NIM_NIP');

			$this->db->where('NIM_NIP', $key );

			$this->db->or_where('email', $key );

			$data = $this->db->get('t_user')->row();



			if (!empty($data->NIM_NIP)){

				if($key == $data->NIM_NIP){

					return 1;

				}

				elseif ($key == $data->email) {

					return 1;

				}

				

				else {

					return 0;

				}

			}

			else {

				return 0;

			}

		}



		///get user
		function getUser($key){
			$this->db->where('NIM_NIP', $key );
			$this->db->or_where('email', $key );
			return $this->db->get('t_user');
		}	





		/////mengirim email

		function sendMail($email,$pesan){

			$config = Array(
				'protocol' => 'smtp',  
			    'smtp_host' => 'smtp.gmail.com', 
			    'smtp_crypto' => 'tls', 
			    'smtp_port' => 587,  
			    'smtp_user' => 'abdullah.aflaha.aslam@gmail.com',   
			    'smtp_pass' => 'aslam1234',   
			    'mailtype' => 'html',   
			    'charset' => 'utf8'
			);
			$this->load->library('email');  
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");  
			$this->email->from('abdullah.aflaha.aslam@gmail.com', 'Fakultas Pertanian UNS');   
			$this->email->to($email);   
			$this->email->subject('Forget Password');   
			$this->email->message($pesan);  
			if (!$this->email->send()) {  
		    	show_error($this->email->print_debugger());   
			}else{  
			    echo '<script>alert ("Data Account has been sent email")</script>';
			}  

		}
		
}


?>