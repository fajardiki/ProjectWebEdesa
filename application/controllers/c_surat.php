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
					'surat' => $this->m_user->tampilkan_surat()
				);
			$this->load->view('surat/v_surat',$data);
		}

		public function cari(){
			if ($this->session->userdata('username')) {
				$cari = $this->input->post('input_cari');
				$data['results'] = $this->m_user->cari($cari);
				$this->load->view('v_surat', $data);
			}
			
		}

		public function form(){
			$btn = $this->input->post('btnpilih');
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'nik' => $this->m_user->getnikwarga($nik)
				);

			$this->load->view('surat/pengajuan-offline/v_form',$data);
		} 


}
?>