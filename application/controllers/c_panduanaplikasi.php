<?php 

class c_panduanaplikasi extends CI_Controller{
	
	function __construct() {
			parent::__construct();
			$this->load->model('m_user');
		}

	public function index()
	{
		$data = array(
			'head'=>'v_header',
			'foot'=>'v_footer',
			'navbar'=>'v_navbar'
		);

		$this->load->view('warga/v_panduanaplikasi',$data);
	}
}
?>