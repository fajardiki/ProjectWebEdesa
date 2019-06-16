<?php 

/**
 * 
 */
class c_pengarsipan extends CI_Controller {

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


		public function hutdesa() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'tittle' => 'HUT Desa',
				'side1' => 'v_hutdesa'
			);

		$this->load->view('pengarsipan/v_arsip_dokumentasi_kegiatan',$data);
		}


		public function rapat_bulanan() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'tittle' => 'Rapat Bulanan',
				'side2' => 'v_rapatbulanan'
			);
		$this->load->view('pengarsipan/v_arsip_dokumentasi_kegiatan',$data);
		}

		public function lomba_agustusan() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'tittle' => 'Lomba Agustusan',
				'side3' => 'v_lombaagustusan'
			);
		$this->load->view('pengarsipan/v_arsip_dokumentasi_kegiatan',$data);
		}

		public function posyandu() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'tittle' => 'Posyandu',
				'side3' => 'v_posyandu'
			);
		$this->load->view('pengarsipan/v_arsip_dokumentasi_kegiatan',$data);
		}

		public function arsip_datapengajuan() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'dataarsip'=>$this->m_user->arsip_datapengajuan()
				
			);
		$this->load->view('pengarsipan/v_data_pengajuan',$data);
		}

		public function arsip_suratmasuk() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'tittle' => 'Surat Masuk',
				'side5' => 'v_suratmasuk',
				'masuk' => $this->m_user->suratmasuk()
				
			);
		$this->load->view('pengarsipan/v_arsip_suratpengajuan',$data);
		}

		public function arsip_suratkeluar() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'tittle' => 'Surat Keluar',
				'side6' => 'v_suratkeluar',
				'keluar' => $this->m_user->suratkeluar()
				
				
			);
		$this->load->view('pengarsipan/v_arsip_suratpengajuan',$data);
		}

		public function arsip_suratditolak() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'tittle' => 'Surat di Tolak',
				'side7' => 'v_suratditolak',
				'ditolak' => $this->m_user->suratditolak()
				
				
			);
		$this->load->view('pengarsipan/v_arsip_suratpengajuan',$data);
		}

}

?>