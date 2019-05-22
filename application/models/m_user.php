 <?php 
	
	/**
	 * 
	 */
	class M_user extends CI_Model {
		
		// Login warga

		public function login_warga($username, $password) {
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
		#pemaggilan data ke database surat
		public function surat_fasilitas_offline() {
			$query = $this->db->select("*")
					-> from ('surat')
					-> get();
				return $query->result();
		}


		public function surat_fasilitas_online() {
			$query = $this->db->query("SELECT * FROM permohonan INNER JOIN warga  ON permohonan.nik = warga.nik INNER JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE status = 'Diajukan'");
				return $query->result();
		}

		public function tampilkan_surat() {
			$query = $this->db->select("*")
					-> from ('warga')
					-> get();
				return $query->result();
		}

		public function cari($cari) {
			$query = $this->db->query("SELECT * FROM warga WHERE nama like '%$cari%'");
			return $query->result_array();
		}


		public function getSurat($id) {
			$hsl = $this->db->query("SELECT * FROM surat WHERE kode_surat = '$id'");
			return $hsl;
		}

		public function getnikwarga($nik) {
			$hsl = $this->db->query("SELECT * FROM warga WHERE nik = '$nik'");
			return $hsl->result_array();
		}

// <<<<<<< HEAD
// =======

// >>>>>>> fde4148f2d2714e8e5a7b3726173c31b19a52d30
		public function getslideshow() {
			$hsl = $this->db->query("SELECT * FROM slideshow");
			return $hsl;
		}
// <<<<<<< HEAD
// =======


// >>>>>>> fde4148f2d2714e8e5a7b3726173c31b19a52d30
		
	}
?>