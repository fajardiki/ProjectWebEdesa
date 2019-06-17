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

		public function insertpengumuman() {
			$nama = $this->input->post('judul');
			$isi = $this->input->post('isi_pengumuman');

			if (!empty($_FILES['gambar']['name'])) {
				$upload = $this->_do_upload();
				$fotopengumuman = $upload;
			}

			var_dump($nama);
			var_dump($isi);
			var_dump($fotopengumuman);
			$this->m_user->insertpengumuman($nama, $isi, $fotopengumuman);
			redirect('c_pengaturan/lihatpengumuman');

		}

		private function _do_upload() {
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 100;
			$config['max_widht'] = 1000;
			$config['max_height'] = 1000;
	 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('msg', $this->upload->display_errors('',''));

			}
			return $this->upload->data('file_name');
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

		public function insertslideshow() {
			$nama = $this->input->post('judul');
			$isi = $this->input->post('keterangan');

			if (!empty($_FILES['gambar']['name'])) {
				$upload = $this->_upload_do();
				$fotoslide = $upload;
			}

			var_dump($nama);
			var_dump($isi);
			var_dump($fotoslide);
			$this->m_user->insertslide($nama, $isi, $fotoslide);
			redirect('c_pengaturan/lihatFoto');

		}

		private function _upload_do() {
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 100;
			$config['max_widht'] = 1000;
			$config['max_height'] = 1000;
	 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('msg', $this->upload->display_errors('',''));

			}
			return $this->upload->data('file_name');
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