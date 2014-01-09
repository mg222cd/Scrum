<?php
	class DBConnection {
		private $m_mysqli = null;
		
		public function Connect() {
			$this->m_mysqli = new mysqli(DBSettings::DBHOST,
										DBSettings::DBUSER,
										DBSettings::DBPASSWORD,
										DBSettings::DATABASE);
			$this->m_mysqli->set_charset("utf8");
			
			if ($this->m_mysqli->connect_errno) {
				throw new Exception("Connection failed: $this->m_mysqli->connect_error");
				return FALSE;
			}
			return TRUE;
		}
		
		public function Close() {
			$this->m_mysqli->close();
		}
		
		/**
		 * Run prepare and handle errors
		 * @return mysqli_stmt
		 */
		 public function Prepare($sql) {
		 	
		 }
	}
?>