<?php
/**
 * 
 */
class c_surat extends CI_Controller {
	
	function __construct() {
			parent::__construct();
			$this->load->model('m_user');
		}

		public function index() {
			$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'slideshow'=>$this->m_user->getslideshow()
			);
			$this->load->view('surat/pengajuan-offline/v_fasilitas',$data);
		}
}
?>