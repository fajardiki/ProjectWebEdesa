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
			if (!$this->session->userdata('username')) {
				$this->load->view('v_login');
			} else {
				$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'surat' => $this->m_user->surat_fasilitas_offline()
				);

				
			}
			
		}

		public function pengajuan_offline(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'surat' => $this->m_user->surat_fasilitas_offline()
				);

			$this->load->view('surat/pengajuan-offline/v_fasilitas',$data);
		} 

		public function surat() {
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'surat' => $this->m_user->cari_surat()
				);
			$this->load->view('surat/v_surat',$data);
		}
}
?>