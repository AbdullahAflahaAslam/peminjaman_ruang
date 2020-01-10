<?php 
/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_admin');
		$this->load->model('Model_ruang');
		$this->load->model('Model_user');

	}

	function index(){
		cekAdmin();
		if (isset($_SESSION['admin'])) {
			$data['pinjam'] = $this->Model_ruang->getAllDaftarPinjam();
			$this->template->load('Template_Admin', 'admin/dashboard', $data);
		} else {
			$this->load->view('auth/form_login_admin');
		}
	}

	function user(){
		cekAdmin();
		$data['user'] = $this->Model_user->getAll();
		if (isset($_POST['deleteUser'])) {
			$id = $this->input->post('nim_nip');
			$this->Model_user->deleteUser($id);
			redirect('admin/user');
		} elseif (isset($_POST['editUser'])) {
			$id = $this->input->post('id_user');
			$this->Model_user->updateUser($id);
			redirect('admin/user');
		} elseif (isset($_POST['tambahUser'])) {
			$this->Model_user->addUser();
			redirect('admin/user');
		}
		$this->template->load('Template_Admin', 'admin/user', $data);
	}

	function ruang(){
		cekAdmin();
		$data['ruang'] = $this->Model_ruang->getAll();
		if (isset($_POST['tambahRuang'])) {
			$this->Model_ruang->addRuang();
			redirect('admin/ruang');
		} elseif (isset($_POST['hapusRuang'])) {
			$id = $this->input->post('id_ruang');
			$this->Model_ruang->deleteRuang($id);
			redirect('admin/ruang');
		} elseif (isset($_POST['editRuang'])) {
			$id = $this->input->post('id_ruang');
			$this->Model_ruang->editRuang($id);
			redirect('admin/ruang');
		}
		$this->template->load('Template_Admin', 'admin/ruang', $data);
	}

	function edit_user(){
		cekAdmin();
		$id = $this->uri->segment(3);
		$data['user'] = $this->Model_user->getUserByNIM($id);
		$this->template->load('Template_Admin', 'admin/edit_user', $data);
	}

	function accept_peminjaman(){
		cekAdmin();
		$tgl = date('Y-m-d');
		$jam = date('H:i:s');
		$id = $this->uri->segment(3);
		$this->Model_admin->accept_peminjaman($id, $tgl, $jam);
		redirect('admin');
	}

	function reject_peminjaman(){
		cekAdmin();
		$tgl = date('Y-m-d');
		$jam = date('H:i:s');
		$id = $this->uri->segment(3);
		$this->Model_admin->reject_peminjaman($id, $tgl, $jam);
		redirect('admin');
	}

	function login(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		if (isset($_SESSION['admin'])) {
			redirect();
		} else {
			if (isset($_POST['login'])) {
				if ($this->Model_admin->login($user, $pass)==2) {
					$_SESSION['login_status'] = "admin";
					$_SESSION['admin'] = "true";
					$_SESSION['nama'] = "Admin";
					$_SESSION['id'] = "id";
					//redirect('admin');
					redirect(base_url().'admin');
				} elseif ($this->Model_admin->login($user, $pass)==1){
					echo '<script>alert ("User Anda Tidak Terdaftar")</script>';
		   			$this->load->view('auth/form_login_admin');
				} elseif ($this->Model_admin->login($user, $pass)==0) {
					echo '<script>alert ("Password yang anda masukan salah")</script>';
		   			$this->load->view('auth/form_login_admin');
				}
			} else {
				$this->load->view('auth/form_login_admin');
			}
		}
	}

	function logout(){
		cekAdmin();
		$this->session->sess_destroy();
		redirect('admin');
	}

	function setting(){
		cekAdmin();
		$this->template->load('Template_Admin', 'admin/setting');
	}
}
 ?>