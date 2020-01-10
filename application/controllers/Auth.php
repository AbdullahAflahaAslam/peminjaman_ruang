<?php

/**
* 
*/
class Auth extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('model_auth');
	}
 

	function login(){

		if(isset($_SESSION['sesID'])){
			redirect('user');
		}else{

			if(isset($_POST['login'])){

					if($this->model_auth->login()==2){

						$this->session->login_status = 'true';

						$_SESSION['nama'] =$this->model_auth->get()->nama_user;

						$_SESSION['id'] = $this->model_auth->get()->id_user;

						$_SESSION['NIM_NIP'] = $this->model_auth->get()->NIM_NIP;

						$_SESSION['user'] = $this->model_auth->get()->user;

						$_SESSION['password'] = $this->model_auth->get()->pass;

						redirect(base_url().'user');

					}

					elseif ($this->model_auth->login()==1) {

						echo '<script>alert ("User Anda Tidak Terdaftar")</script>';

			   			$this->load->view('auth/form_login');

					}

					else{

						echo '<script>alert ("Password yang anda masukan salah")</script>';

			   			$this->load->view('auth/form_login');

					}

				}

				else{

					$this->load->view('auth/form_login');


				}
			}

	}






	function logout(){

			$this->session->sess_destroy();

			//$this->load->view('form_login');

			$this->load->view('auth/form_login');

	}


	function signup(){  

			if (isset($_POST['add'])) {

				if(($_POST['pass']==$_POST['repass'])){

					//account has been registered

					if($this->model_auth->CekNim()==2){

						echo '<script>alert ("Your NIM/NIP has been Registered ")</script>';

						$this->load->view('auth/form_signup');

					}
					///creat account
					elseif ($this->model_auth->CekNim()==1){

						$this->model_auth->save();

						echo '<script>alert ("Success Created")</script>';

						$this->load->view('auth/form_login');

					}
					//nim/nip invalid
					elseif ($this->model_auth->CekNim()==0) {
						echo '<script>alert ("Your NIM/NIP is Invalid ")</script>';

						$this->load->view('auth/form_signup');
					}



				}

				else{

					echo '<script>alert ("Make sure your password same ")</script>';

					$this->load->view('auth/form_signup');

				}

				

			} else {


				//$this->template->load('template','signup',$data);

				$this->load->view('auth/form_signup');



			}

		}

		function Forget_Password(){
			if(isset($_POST['submit'])){
				if($this->model_auth->forgetpass()==1){
					$key =  $this->input->post('key');
					$data['user']= $this->model_auth->getUser($key);
					/*$pass = $this->model_auth->getPass();*/
					$email = $this->model_auth->getUser($key)->row()->email;
					$pesan =  $this->load->view('auth/Email_Forget_Password',$data,true);
					$this->model_auth->sendMail($email,$pesan);
					$this->load->view('auth/form_login');
				}
				else{
					echo '<script>alert ("Username or Email is not registered")</script>';
		   			$this->load->view('auth/form_forget_password');
				}
			}
			else{
				$this->load->view('auth/form_forget_password');
				//$this->template->load('template','form_login');
			}
		}




}


?>