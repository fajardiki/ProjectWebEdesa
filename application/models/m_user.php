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

		public function showdb(){
			$query = $this->db->query("SHOW DATABASES");
			return $query->result();
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
		#untuk admin
		public function surat_fasilitas_offline() {
			$query = $this->db->select("*")
					-> from ('surat')
					-> get();
				return $query->result();
		}

		#untuk admin
		public function surat_fasilitas_online() {
			$query = $this->db->query("SELECT * FROM permohonan INNER JOIN warga ON permohonan.nik = warga.nik INNER JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE status_pengajuan = 'Diajukan'");
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
			$query = $this->db->query("SELECT * FROM permohonan INNER JOIN warga ON permohonan.nik = warga.nik INNER JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE status_pengajuan != 'Diajukan'");
			return $query->result();
		}
		
		public function datasuratform($kode) {
			$hsl = $this->db->query("SELECT * FROM surat WHERE kode_surat = '$kode'");
			return $hsl;
		}

		public function show_datapengajuan($nik) {
			$query = $this->db->query("SELECT * FROM permohonan INNER JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE nik ='$nik'");
			return $query->result();
		}

		public function insert_pengajuan($nik, $gambarktp, $gambarkk, $keperluan, $kode_surat) {
    		$hsl = $this->db->query("INSERT INTO permohonan VALUES('$nik','','','','$gambarktp','$gambarkk','$keperluan','$kode_surat','admin','Diajukan')");
    		return $hsl;
  		}

  		public function insert_pengajuan_offline($nik, $keperluan, $kodesurat) {
  			$hsl = $this->db->query("INSERT INTO permohonan VALUES('$nik','','','','','','$keperluan','$kode_surat','admin','Diajukan')");
    		return $hsl;
  		}


  		public function status_proses($nik){
  			$query = $this->db->query("UPDATE permohonan SET status_pengajuan='Diproses' WHERE nik= '$nik'");
			return $query;
  		}


  		public function status_selesai($nik){
  			$query = $this->db->query("UPDATE permohonan SET status_pengajuan='Selesai' WHERE nik= '$nik'");
			return $query;
  		}

  		public function status_ditolak($nik){
  			$query = $this->db->query("UPDATE permohonan SET status_pengajuan='Selesai' WHERE nik= '$nik'");
			return $query;
  		}

  		public function surat_statuspengajuan($nik) {
			$query = $this->db->query("SELECT * FROM permohonan LEFT JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE nik = '$nik'");
			return $query;
		}

		public function arsip_datapengajuan(){
			$query = $this->db->query("SELECT * FROM permohonan INNER JOIN warga ON permohonan.nik = warga.nik INNER JOIN surat ON permohonan.kode_surat=surat.kode_surat");
			return $query->result();
		}

		public function suratmasuk(){
			$query = $this->db->query("SELECT * FROM permohonan INNER JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE status_pengajuan='Diajukan' OR status_pengajuan='Diproses'");
			return $query->result();
		}

	 	public function suratkeluar(){
			$query = $this->db->query("SELECT * FROM permohonan INNER JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE status_pengajuan='Selesai'");
			return $query->result();
		}

		public function suratditolak(){
			$query = $this->db->query("SELECT * FROM permohonan INNER JOIN surat ON permohonan.kode_surat = surat.kode_surat WHERE status_pengajuan='Tolak'");
			return $query->result();
		}

		public function updatefotoprofile($nik, $fotoprofile) {
			$query = $this->db->query("UPDATE warga SET avatar='$fotoprofile' WHERE nik= '$nik'");
			return $query;
		}

		public function getpengajuan($nik) {
			$query = $this->db->query("SELECT * FROM warga LEFT JOIN kartu_keluarga ON warga.nkk = kartu_keluarga.nkk LEFT JOIN kode_pos ON kartu_keluarga.kode_pos = kode_pos.kode_pos WHERE warga.nik='$nik'");
			return $query;
		}

		public function databackup(){
			$query = $this->db->query("SELECT * FROM databackup");
			return $query->result();
		}

		public function insertpengumuman($nama, $isi, $fotopengumuman){
			$editPengumuman = $this->db->query("INSERT INTO pengumuman VALUES ('', '$nama', '$isi', '$fotopengumuman', '')");	
		}


		public function lihatpengumuman(){
			$query = $this->db->query("SELECT * FROM pengumuman");
			return $query;
		}

		public function lihatfoto(){
			$query = $this->db->query("SELECT * FROM slideshow");
			return $query;
		}

		public function insertslide($nama, $isi, $fotoslide){
			$query = $this->db->query("INSERT INTO slideshow VALUES ('', '$nama', '$isi', '$fotoslide', '')");
		}
		
	}
?>