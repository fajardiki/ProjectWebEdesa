 <?php 
	
	/**
	 * 
	 */
	class M_warga extends CI_Model {
		
		// Login warga
		public function getwarga() {
			$hsl = $this->db->query("SELECT * FROM warga");
			return $hsl;
		}

		public function getnkkwarga() {
			$hsl = $this->db->query("SELECT * FROM kartu_keluarga");
			return $hsl->result();
		}
		
		
	}
?>