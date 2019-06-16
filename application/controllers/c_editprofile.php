<?php 
	/**
	 * 
	 */
	class C_editprofile extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('m_user');
		}

		public function index() {

			$nama = $this->session->userdata('user');
			foreach ($nama as $us) {
				$user = $us['username'];
			} 
				$data = array(
					'head'=>'v_header', 
					'foot'=>'v_footer',
					'navbar'=>'v_navbar',
					'warga' => $this->m_user->getseswarga($user)

				);

				$this->load->view('v_edit_profil',$data);
			
		}

		public function uploudfotoprofile() {

			$nik = $this->input->post('nik');

			if (!empty($_FILES['gambar']['name'])) {
				$upload = $this->_do_upload();
				$fotoprofile = $upload;
			}

			// var_dump($nik);
			// var_dump($fotoprofile);
			$this->m_user->updatefotoprofile($nik, $fotoprofile);
			redirect('c_editprofile');
			
		}

		private function _do_upload() {
			$config['upload_path'] = 'assets/img_profil/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 100;
			$config['max_widht'] = 1000;
			$config['max_height'] = 1000;
	 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('msg', $this->upload->display_errors('',''));

			}
			return $this->upload->data('file_name');
		}

	}
?>