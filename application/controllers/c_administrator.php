<?php 
	/**
	* 
	*/
	class C_administrator extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('m_user');
		}

		public function index() {
			if (!$this->session->userdata('username')) {
				$this->load->view('admin/v_login_admin');
			} else {
				redirect('c_dasbord');
			}
			
		}
	}
?>