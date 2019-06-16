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
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'tittle' => 'Arsip Dokumentasi Kegiatan',
				'side1' => 'v_hutdesa'
			);

		$this->load->view('pengarsipan/v_arsip_dokumentasi_kegiatan',$data);
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

}

?>