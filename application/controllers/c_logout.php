<?php 
	/**
	* 
	*/
	class C_logout extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('m_user');
		}

		public function index() {
			$this->session->sess_destroy();
			redirect('c_login');
		}
	}
?>