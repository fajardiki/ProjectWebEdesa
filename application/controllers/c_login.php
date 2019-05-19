<?php 
	/**
	 * 
	 */
	class C_login extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('m_user');
		}

		public function index() {
			if (!$this->session->userdata('username')) {
				$this->load->view('v_login');
			} else {
				redirect('c_dasbord');
			}
			
		}

		public function login_user() {
			$btn = $this->input->post('btnlogin');
			if (isset($btn)) {
				$username = $this->input->post("username");
				$password = $this->input->post("password");
				

				$cekk = $this->m_user->login_admin($username, $password);
				if ($cekk) {
					$dt= array(
						'username' => $username,
						'password' => $password,
						'user' => $this->m_user->getSession($username)
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