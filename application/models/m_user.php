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

		public function getslideshow() {
			$hsl = $this->db->query("SELECT * FROM slideshow");
			return $hsl;
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
			$query = $this->db->query("SELECT * FROM permohonan INNER JOIN warga  ON permohonan.nik = warga.nik INNER JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE status_pengajuan = 'Diajukan'");
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
			$query = $this->db->query("SELECT * FROM warga WHERE nik = '$nik'");
				return $query->result();
		}


		public function tampilkan_datawarga() {
			$query = $this->db->query("SELECT * FROM warga ");
				return $query->result();
		}
		public function status_pengajuan() {
			$hsl = $this->db->query("SELECT * FROM permohonan INNER JOIN warga ON permohonan.nik = warga.nik INNER JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE status_pengajuan = 'Diproses'");
			return $hsl;
		}

		
		public function datasuratform($kode) {
			$hsl = $this->db->query("SELECT * FROM surat WHERE kode_surat = '$kode'");
			return $hsl;
		}

		public function insert($data) {
    		$hsl = $this->db->query("INSERT INTO permohonan VALUES('$nik','','','','$nameFile2','$nameFile1','$keperluan','Diajukan','$ksurat','admin')");
    		return $hsl;
  		}


  		public function status_proses(){
  			$query = $this->db->query("UPDATE permohonan SET status_pengajuan='Diproses' WHERE nik=$nik");
			return $query;
  		}


  		public function status_selesai(){
  			$query = $this->db->query("UPDATE permohonan SET status_pengajuan='Selesai' WHERE nik=$nik");
			return $query;
  		}

  		public function surat_statuspengajuan($nik) {
			$query = $this->db->query("SELECT * FROM permohonan INNER JOIN surat  ON permohonan.kode_surat = surat.kode_surat WHERE nik = '$nik'");
				return $query;
		}
	}
?>