<?php 
/**
 * 
 */
class c_warga extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_warga');
	}

	public function index() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'tittle' => 'Tambah KK Baru',
				'kk' => 'v_tambahkk'
			);

		$this->load->view('admin/v_datawarga',$data);
	}

	public function tambahkk() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'tittle' => 'Tambah KK Baru',
				'kk' => 'v_tambahkk'
			);
		$this->load->view('admin/v_datawarga',$data);
	}

	public function tambahwarga() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'tittle' => 'Tambah Warga Baru',
				'wrg' => 'v_tambahwarga'
			);
		$this->load->view('admin/v_datawarga',$data);
	}



	public function semuawarga() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'swrg' => 'v_semuawarga',
				'tittle' => 'Data Warga',
				'datawarga' => $this->m_warga->getwarga()
			);
		$this->load->view('admin/v_datawarga',$data);
	}




	public function cariwarga(){
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

}
?>