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
		 	$stmt = $this->m_mysqli->prepare($sql);
				if ($stmt === FALSE) {
					throw new Exception("Prepare of '$sql' failed" . $this->m_mysqli->error);
					return FALSE;
				}
			return $stmt;
		 }
		 
		 public function RunAndFetchObjects($stmt, $className) {
		 	$result = $this->m_mysqli->query($stmt);
			$ret = array();
				while ($row = $result->fetch_assoc()) {
					$ret[] = $row;
				}
			return $ret;
		 }
		 
		 public function RunAndFetchResult(mysqli_stmt $a_stmt) {
		 	$result = null;
			$a_stmt->execute();
			$a_stmt->store_result();
			
				if ($a_stmt->fetch()) {
					return FALSE;
				}
				else {
					return TRUE;
				}
			$a_stmt->close();
		 }
	}
?>