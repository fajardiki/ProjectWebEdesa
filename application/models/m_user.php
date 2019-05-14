 <?php 
	
	/**
	 * 
	 */
	class M_user extends CI_Model {
		
		public function login_admin($username, $password) {
			$periksa = $this->db->get_where('admin',array('username'=>$username, 'password'=>$password));

			if ($periksa->num_rows()>0) {
	 			return 1;
	 		} else {
	 			return 0;
	 		}
		}

		public function surat_fasilitas_offline() {
			$query = $this->db->select("*")
					-> from ('surat')
					-> get();
				return $query->result();
		}



		public function getslideshow() {
			$hsl = $this->db->query("SELECT * FROM slideshow");
			return $hsl;
		}
	}
?>