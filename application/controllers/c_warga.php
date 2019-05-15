<?php 
/**
 * 
 */
class c_warga extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'kk' => 'v_tambahkk'
			);

		$this->load->view('admin/v_datawarga',$data);
	}

	public function tambahkk() {
		$data = array(
				'head'=>'v_header',
				'foot'=>'v_footer',
				'navbar'=>'v_navbar',
				'kk' => 'v_tambahkk'
			);
		$this->load->view('admin/v_datawarga',$data);
	}

	public function tambahwarga() {
		$this->load->view('admin/v_tambahkk');
	}

	public function semuawarga() {
		$this->load->view('admin/v_tambahkk');
	}
}
?>