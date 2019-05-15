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
				'surat' => $this->m_user->surat_fasilitas_offline()
			);

			$this->load->view('surat/pengajuan-offline/v_fasilitas',$data);


			
		}

		public function surat() {
			$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
			
			);
			
			$this->load->view('surat/config/v_cari',$data);
			
		}


}
?>