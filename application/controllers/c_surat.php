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

		#menampilkan pengajuan_onlie
		public function pengajuan_online(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'datamasuk' => $this->m_user->surat_fasilitas_online()
				);

			$this->load->view('surat/pengajuan-online/v_permohonan_masuk',$data);
		} 

		#menampilkan nama surat
		public function surat() {
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'surat' => $this->m_user->tampilkan_surat()
				);
			$this->load->view('surat/v_surat',$data);


		}

		#
		public function pilih_data_warga(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'warga' => $this->m_user->tampilkan_datawarga(),
					'warga2' => $this->m_user->surat_fasilitas_offline(),

				);

			$this->load->view('surat/pengajuan-offline/v_form',$data);
		} 



		public function status_pengajuan(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'statuspengajuan' => $this->m_user->status_pengajuan()
				);

			$this->load->view('surat/v_status_pengajuan',$data);
		} 

		public function status_selesai(){
			$data = array(
			'head'=>'v_header',
			'foot'=>'v_footer',
			'navbar'=>'v_navbar',
			'selesai'=>$this->m_user->status_selesai(),
		);
		
		$this->load->view('warga/v_statuspengajuan',$data);
	}


	public function status_proses(){
		$data = array(
			'head'=>'v_header',
			'foot'=>'v_footer',
			'navbar'=>'v_navbar',
			'proses'=>$this->m_user->status_diproses(),
		);
		
		$this->load->view('warga/v_statuspengajuan',$data);
	}

		public function formpengajuan() {
			$kdsurat = $this->uri->segment(3);
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'nik' => $this->m_user->datasuratform($kdsurat)
				);

			$this->load->view('surat\pengajuan-online\v_from',$data);
		}

		public function uploudpengajuan() {
			$data = array(
				'nama' => $this->input->post('nama'),
				'nik' => $this->input->post('nik'),
				'jenis' => $this->input->post('jenis'),
				'keperluan' => $this->input->post('keperluan')
			);

			if (!empty($_FILES['gambarktp']['name'])) {
				$upload = $this->_do_upload();
				$data['gambarktp'] = $upload;
			}

			var_dump($data);
			// $this->User_model->insert($data);
		}

		private function _do_upload() {
			$config['upload_path'] = 'assets/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 100;
			$config['max_widht'] = 1000;
			$config['max_height'] = 1000;
			$config['file_name'] = round(microtime(true)*1000);
	 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambarktp')) {
				$this->session->set_flashdata('msg', $this->upload->display_errors('',''));

			}
			return $this->upload->data('file_name');
		}


}
?>