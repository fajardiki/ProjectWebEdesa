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


		#menampilkan pengajuan_offline admin
		public function pengajuan_offline(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'surat' => $this->m_user->surat_fasilitas_offline()
				);

			$this->load->view('surat/admin/pengajuan-offline/v_fasilitas',$data);
		} 

		#menampilkan pengajuan_onlie
		public function pengajuan_online(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'datamasuk' => $this->m_user->surat_fasilitas_online()
				);

			$this->load->view('surat/admin/pengajuan-online/v_permohonan_masuk',$data);
		} 

		#menampilkan nama surat
		public function surat() {
			$ks = $this->uri->segment(3);
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'kode_surat'=>$ks,
					'surat' => $this->m_user->tampilkan_surat()
				);
			$this->load->view('surat/v_surat',$data);


		}

		public function listsurat() {
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'surat'=>$this->m_user->surat_fasilitas_offline()
			);

		$this->load->view('surat/warga/pengajuan-online/v_listsurat',$data);
	}

		#form daftar surat
		public function pilih_data_warga(){
			$ks = $this->uri->segment(3);
			$nik = $this->uri->segment(4);
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'kodesurat' => $this->m_user->datasuratform($ks),
					'warga'=> $this->m_user->getnikwarga($nik)
				);

			$this->load->view('surat/admin/pengajuan-offline/v_form',$data);
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
			$nik = $this->uri->segment(3);
			$data = array(
			'head'=>'v_header',
			'foot'=>'v_footer',
			'navbar'=>'v_navbar',
			'selesai'=>$this->m_user->status_selesai($nik),
		);
		
		$this->load->view('surat/v_status_pengajuan',$data);
	}


		public function status_proses(){
			$nik = $this->uri->segment(3);
			$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'proses'=>$this->m_user->status_diproses($nik),
			);
		
			$this->load->view('surat/v_status_pengajuan',$data);
		}

		public function formpengajuanwarga() {
			$kdsurat = $this->uri->segment(3);
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'nik' =>$this->m_user->datasuratform($kdsurat)
				);

			$this->load->view('surat/warga/pengajuan-online/v_form',$data);
		}

		public function formpengajuanadmin() {
			$nik = $this->uri->segment(3);
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'permohonan' => $this->m_user->show_datapengajuan($nik),
					'warga'=> $this->m_user->getnikwarga($nik)
				);


			$this->load->view('surat/admin/pengajuan-online/v_form',$data);
		}


		public function uploudpengajuan() {

			$nik = $this->input->post('nik');
			$keperluan = $this->input->post('keperluan');
			$kode_surat = $this->input->post('ksurat');

			if (!empty($_FILES['gambarktp']['name'])) {
				$upload = $this->_do_upload();
				$gambarktp = $upload;
			}

			if (!empty($_FILES['gambarkk']['name'])) {
				$upload = $this->_upload_do();
				$gambarkk = $upload;
			}

			// var_dump($nik, $gambarktp, $gambarkk, $keperluan, $kode_surat);
			$this->m_user->insert_pengajuan($nik, $gambarktp, $gambarkk, $keperluan, $kode_surat);
			redirect('c_statuspengajuan');
		}

		private function _do_upload() {
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 100;
			$config['max_widht'] = 1000;
			$config['max_height'] = 1000;
	 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambarktp')) {
				$this->session->set_flashdata('msg', $this->upload->display_errors('',''));

			}
			return $this->upload->data('file_name');
		}

		private function _upload_do() {
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 100;
			$config['max_widht'] = 1000;
			$config['max_height'] = 1000;
	 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambarkk')) {
				$this->session->set_flashdata('msg', $this->upload->display_errors('',''));

			}
			return $this->upload->data('file_name');
		}

		public function uploudpengajuanoffline() {
			$nik = $this->input->post('nik');
			$keperluan = $this->input->post('keperluan');
			$kodesurat = $this->input->post('ksurat');

			// $this->m_user->insert_pengajuan_offline($nik, $keperluan, $kodesurat);
			$data = array(
				'keperluan' => $keperluan,
				'ksurat' => $kodesurat,
				'dwarga' => $this->m_user->getpengajuan($nik)
				);
			var_dump($data);

		}


}
?>