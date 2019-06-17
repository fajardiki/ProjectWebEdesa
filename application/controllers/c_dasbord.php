<?php 
	/**
	 * 
	 */
	class C_dasbord extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('m_user');
		}

		public function index() {

			if (!$this->session->userdata('username')) {
				$this->load->view('v_login');
			} else {
				$data = array(
					'head'=>'v_header', 
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'slideshow'=>$this->m_user->getslideshow(),
					'pengumuman'=>$this->m_user->getpengumuman()
				);

				$this->load->view('v_dasbord',$data);
			}
			
		}
	}
?>