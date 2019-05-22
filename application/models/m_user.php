 <?php 
	
	/**
	 * 
	 */
	class M_user extends CI_Model {
		
		// Login warga

		public function login_admin($username, $password) {
			$periksa = $this->db->get_where('warga',array('username'=>$username, 'password'=>$password));

			if ($periksa->num_rows()>0) {
	 			return 1;
	 		} else {
	 			return 0;
	 		}
		}

		public function getseswarga($user) {
			$hsl = $this->db->query("SELECT * FROM warga WHERE username = '$user'");
			return $hsl->result_array();
		}

		// 

		public function surat_fasilitas_offline() {
			$query = $this->db->select("*")
					-> from ('surat')
					-> get();
				return $query->result();
		}

		public function tampilkan_surat() {
			$query = $this->db->select("*")
					-> from ('warga')
					-> get();
				return $query->result();
		}

		public function cari($cari) {
			$this->db->like('input_cari',$cari);
			$query = $this->db->get('warga');
			return $query->result();
		}


		public function getSurat($id) {
			$hsl = $this->db->query("SELECT * FROM surat WHERE kode_surat = '$id'");
			return $hsl;
		}

		public function getnikwarga($nik) {
			$hsl = $this->db->query("SELECT * FROM warga WHERE nik = '$nik'");
			return $hsl->result_array();
		}


		public function getslideshow() {
			$hsl = $this->db->query("SELECT * FROM slideshow");
			return $hsl;
		}


		
	}
?>