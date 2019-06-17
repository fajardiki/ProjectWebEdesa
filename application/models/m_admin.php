 <?php 
	
	/**
	 * 
	 */
	class M_admin extends CI_Model {
		
		// Login warga

		public function login_admin($username, $password) {
			$periksa = $this->db->get_where('admin',array('username'=>$username, 'password'=>$password));

			if ($periksa->num_rows()>0) {
	 			return 1;
	 		} else {
	 			return 0;
	 		}
		}

		public function getSession($user) {
			$hsl = $this->db->query("SELECT * FROM admin WHERE username = '$user'");
			return $hsl->result_array();
		}



		public function editPengumuman($judul, $isi, $gambar){
			$editPengumuman = $this->db->query("INSERT INTO pengumaman VALUES '', judul_pengumuman='$judul', isi_pengumuman='$isi', gambar_pengumuman='$gambar', ''");
			return $editPengumuman->result_array();
		}
	}
?>