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
			$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'slideshow'=>$this->m_user->getslideshow()
			);

			$this->load->view('v_dasbord',$data);
		}
	}
?>