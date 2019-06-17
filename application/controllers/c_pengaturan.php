<?php 

class c_pengaturan extends CI_Controller{
	
	function __construct() {
			parent::__construct();
			$this->load->model('m_user');
		}
		public function index(){
			if (!$this->session->userdata('username')) {
				$this->load->view('v_login');
			} else {
				$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar' => 'v_navbar',
				);			
			}
			
		}

		public function tambahpengumuman(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'tittle'=>'edit pengumuman',
					'side1'=>'v_editpengumuman',
					'tittle'=>'Tambah Pengumuman',
					'side1' => 'v_tambah_pengumuman'
				);

			$this->load->view('pengaturan/v_pengaturan',$data);
		}

		public function lihatpengumuman(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'tittle'=>'Lihat Pengumuman',
					'side2' => 'v_lihat_pengumuman',
					'lihatpengumuman' => $this->m_user->lihatpengumuman()
				
				);

			$this->load->view('pengaturan/v_pengaturan',$data);
		}

		public function tambahslideshow(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'tittle'=>'Tambah Slideshow',
					'side3' => 'v_tambah_fotoslideshow'
				);

			$this->load->view('pengaturan/v_pengaturan',$data);
		}

		public function lihatFoto(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'tittle'=>'Lihat Foto',
					'side4' => 'v_lihat_foto',
					'lihatfoto' => $this->m_user->lihatfoto()
				);
				$this->load->view('pengaturan/v_pengaturan',$data);
		}

}