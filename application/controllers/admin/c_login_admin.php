<?php 
	/**
	* 
	*/
	class C_login_admin extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('m_user');
			$this->load->model('m_admin');
		}
		
		public function login_admin() {
			$btn = $this->input->post('btnlogin');
			if (isset($btn)) {
				$username = $this->input->post("username");
				$password = $this->input->post("password");
				

				$cekk = $this->m_admin->login_user($username, $password);
				if ($cekk) {
					$dt= array(
						'username' => $username,
						'password' => $password,
						'user' => $this->m_admin->getSession($username)
					);
					$ses = $this->session->set_userdata($dt);
					redirect('c_dasbord');
				} else {
					redirect('c_login');
				}
				
			} else {
				redirect('c_login');
			}
			
		}
	}
?>