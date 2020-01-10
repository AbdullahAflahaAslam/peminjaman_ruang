<?php

/**
* 
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_ruang');
		$this->load->model('Model_user');
		ceklogin();

	}
	
	function index(){
		$data['jam'] = $this->Model_ruang->getJam();
		$data['pinjam']=$this->Model_ruang->getDaftarPinjam()->result();
		$data['ruang'] = $this->Model_ruang->getAll();
		$data['user'] =$_SESSION['id'];
		// $data['list_ruang'] = $this->Model_ruang->getKategori();
		//$this->template->load('templateUsr','user/Show_Person');
		$this->template->load('Template','user/Daftar_pinjam', $data);
		//$this->load->view('Template');
	}

	function Pinjam(){
		if(isset($_POST['submit'])){
			$this->Model_ruang->pinjam();
			redirect(base_url()."User");
		}else{
			$data['jam'] = $this->Model_ruang->getJam();
			$data['pinjam']=$this->Model_ruang->getDaftarPinjam()->result();
			$data['ruang'] = $this->Model_ruang->getAll();
			$data['user'] =$_SESSION['id'];
			$this->template->load('Template','user/Daftar_pinjam', $data);
		}
	}

	function Peminjaman(){
		$id = $_SESSION['id'];
		$data['peminjaman']=$this->Model_ruang->getDaftarPinjamSaya($id)->result();
		$data['ruang'] = $this->Model_ruang->getAll();
		$data['user'] =$_SESSION['id'];
		// $data['list_ruang'] = $this->Model_ruang->getKategori();
		//$this->template->load('templateUsr','user/Show_Person');
		$this->template->load('Template','user/Daftar_pinjam_Saya', $data);
	}


	function Profile(){

			if($this->input->post('last_pass') == $_SESSION['password'] ){
				if($this->input->post('pass') == $this->input->post('confirm_pass')){
					
					$this->Model_user->UpdateProfile();
					echo '<script>alert ("Data has been change")</script>';
					$this->session->sess_destroy();
					$this->load->view('auth/form_login');
				}
				else{
					echo '<script>alert ("Confirm Password is not same")</script>';
					$data['jam'] = $this->Model_ruang->getJam();
					$data['pinjam']=$this->Model_ruang->getDaftarPinjam()->result();
					$data['ruang'] = $this->Model_ruang->getAll();
					$data['user'] =$_SESSION['id'];
					// $data['list_ruang'] = $this->Model_ruang->getKategori();
					//$this->template->load('templateUsr','user/Show_Person');
					$this->template->load('Template','user/Daftar_pinjam', $data);
				}
			}
			else{
				echo '<script>alert ("Your password invalid")</script>';
				$data['jam'] = $this->Model_ruang->getJam();
				$data['pinjam']=$this->Model_ruang->getDaftarPinjam()->result();
				$data['ruang'] = $this->Model_ruang->getAll();
				$data['user'] =$_SESSION['id'];
				// $data['list_ruang'] = $this->Model_ruang->getKategori();
				//$this->template->load('templateUsr','user/Show_Person');
				$this->template->load('Template','user/Daftar_pinjam', $data);
			}
	}

	function Cetak(){
		$id = $this->uri->segment(3);
		$data['peminjaman']=$this->Model_ruang->getPinjam($id)->result();
		$pinjam = $data['peminjaman'];
		$tgl = $pinjam[0]->tgl_pinjam;
		$hari = date("D", strtotime($tgl));
		$jam = strtotime($pinjam[0]->jam_mulai);
		if ($hari == "Sat" || $hari	== "Sun" || $jam > strtotime('17:20:00')) {
			$this->load->view('user/Cetak_dokumen_khusus', $data);
		} else {
			$this->load->view('user/Cetak_dokumen', $data);
		}
	}
}


?>