<?php
	class Member {
		private $m_dbConnection = null;
		
		//tabell:
		private $m_memberTableName = "members";
		
		public function __construct(DBConnection $a_connection) {
			$this->m_dbConnection = $a_connection;
		}
		
		public function CreateMember($m_firstName, $m_lastName, $m_phone) {
			$sql = "INSERT INTO $this->m_memberTableName(m_memberId, m_firstName, m_lastName, m_phone) VALUES(NULL, ?, ?, ?)";
			$stmt = $this->m_dbConnection->Prepare($sql); //analyserar och förbereder
			$stmt->bind_param("sss", $m_firstName, $m_lastName, $m_phone); //binder parametrar
			if ($stmt->execute()) {
				$stmt->close();
				return TRUE;
			}
			else {
				$stmt->close();
				return FALSE;
			}
			//ta bort nedanstående???
		//	$this->m_dbConnection->Close();
		}
		
		
	}
?>