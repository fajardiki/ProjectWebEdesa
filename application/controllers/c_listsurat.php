<?php 

class c_listsurat extends CI_Controller{
	
	function __construct() {
			parent::__construct();
			$this->load->model('m_user');
		}

	public function index()
	{
		$data = array(
			'head'=>'v_header',
			'foot'=>'v_footer',
			'navbar'=>'v_navbar',
			'surat'=>$this->m_user->surat_fasilitas_offline()
		);

		$this->load->view('warga/v_listsurat',$data);
	}
}
?>