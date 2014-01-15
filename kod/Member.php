<?php
	class Member {
		private $m_dbConnection = null;
		
		//tabell:
		private $m_memberTableName = "members";
		
		public function __construct(DBConnection $a_connection) {
			$this->m_dbConnection = $a_connection;
		}
		
		public function CreateMember($m_firstName, $m_lastName, $m_phone) {
			$sql = "INSERT INTO $this->m_memberTableName(memberId, firstName, lastName, phone) VALUES(NULL, ?, ?, ?)";
			$stmt = $this->m_dbConnection->Prepare($sql); 
			$stmt->bind_param("sss", $m_firstName, $m_lastName, $m_phone); 
			if ($stmt->execute()) {
				$stmt->close();
				return TRUE;
			}
			else {
				$stmt->close();
				return FALSE;
			}
			//ta bort?
			//$dbConnection->Close();
		}
		
		public function EditMember($m_memberId, $m_firstName, $m_lastname, $m_phone) {
			$sql = "UPDATE $this->m_memberTableName SET m_firstName=?, m_lastName=?, m_phone=? WHERE m_memberId=?";
			$stmt = $this->m_dbConnection->Prepare($sql);
			$stmt->bind_param("sssi", $m_firstName, $m_lastname, $m_phone, $m_memberId);
			if ($stmt->execute()) {
				$stmt->close();
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		
		public function DeleteMember($m_memberId) {
			$sql = "DELETE FROM $this->m_memberTableName WHERE m_memberId=?";
			$stmt = $this->m_dbConnection->Prepare($sql);
			$stmt->bind_param("i", $m_memberId);
			if ($stmt->execute()) {
				$stmt->close();
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		
		
	}
?>