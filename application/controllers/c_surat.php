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


		#menampilkan pengajuan_offline

		public function pengajuan_offline(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'surat' => $this->m_user->surat_fasilitas_offline()
				);

			$this->load->view('surat/pengajuan-offline/v_fasilitas',$data);
		} 

		#menampilkan pengajuan onlie
		public function pengajuan_online(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'datamasuk' => $this->m_user->surat_fasilitas_online()
				);

			$this->load->view('surat/pengajuan-online/v_permohonan_masuk',$data);
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
				$mencari = $this->input->post('input_cari');

				$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'surat' => $this->m_user->tampilkan_surat(),
					'result' => $this->m_user->cari($mencari)
				);
				$this->load->view('surat/v_surat', $data);
			
		}

		public function form(){
			$btn = $this->
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'nik' => $this->m_user->getnikwarga($btn)
				);

			$this->load->view('surat/pengajuan-offline/v_form',$data);
		} 

		public function status_pengajuan(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'nik' => $this->m_user->status_pengajuan()
				);

			$this->load->view('surat/status_pengajuan',$data);
		} 


}
?>