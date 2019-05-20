<?php 

class c_profildesa extends CI_Controller{
	
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

		$hsl = $this->load->view('warga/v_profildesa',$data);
		return $hsl;
	}
}
?>