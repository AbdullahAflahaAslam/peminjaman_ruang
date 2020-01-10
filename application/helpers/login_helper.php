<?php
	function ceklogin(){
		$ci = & get_instance();
		if ($ci->session->login_status != 'true') {
			redirect('auth/login');
		}
	} 
	function cekAdmin(){
		$ci = & get_instance();
		if ($ci->session->login_status != 'admin') {
			redirect('admin/login');
		}
	}
?>