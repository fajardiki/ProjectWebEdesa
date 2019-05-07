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
			$this->load->view('v_login');
		}

		public function login_user() {
			$btn = $this->input->post('btnlogin');
			if (isset($btn)) {
				$user = $this->input->post("username");
				$pass = $this->input->post("password");
				$cekk = $this->m_user->login_warga($user, $pass);
				if ($cekk) {
					$this->session->set_userdata(array('user'=>$user));
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