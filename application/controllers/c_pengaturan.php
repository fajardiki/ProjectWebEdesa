<?php 

class c_statuspengajuan extends CI_Controller{
	
	function __construct() {
			parent::__construct();
			$this->load->model('m_user');
		}
		public function index(){
			if (!$this->session->userdata('username')) {
				$this->load->view('v_login');
			} else {
				$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar' => 'v_navbar',
				);			
			}
			
		}

		public function editpengumuman(){
			$data = array(
					'head'=>'v_header',
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'tittle'=>'edit pengumuman',
					'side1'=>'v_editpengumuman'

					'editP'=>$this->m_admin->editPengumuman($judul, $judul,$isi)
				);

			$this->load->view('admin/v_editpengumuman',$data);
		}

					
}