 <?php 
	
	/**
	 * 
	 */
	class M_warga extends CI_Model {
		
		// Login warga
		public function getwarga() {
			$hsl = $this->db->query('SELECT * FROM warga');
			return $hsl;
		}
		
		
	}
?>