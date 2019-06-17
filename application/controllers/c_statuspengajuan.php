<?php 

class c_statuspengajuan extends CI_Controller{
	
	function __construct() {
			parent::__construct();
			$this->load->model('m_user');
		}

	public function index()
	{
		$nik = $this->uri->segment(3);

		$nama = $this->session->userdata('user');
	  	foreach ($nama as $us) {
	  		$nik = $us['nik'];
	  	}

		$data = array(
			'head'=>'v_header',
			'foot'=>'v_footer',
			'navbar'=>'v_navbar',
			'status'=>$this->m_user->surat_statuspengajuan($nik)
		);
		
		$this->load->view('warga/v_statuspengajuan',$data);

	}
}
?>