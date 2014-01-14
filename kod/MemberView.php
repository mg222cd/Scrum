<?php
	class MemberView {
		private $m_getFirstName = "firstname";
		private $m_getLastName = "lastname";
		private $m_getPhone = "phone";
		private $m_getRegister = "register";
		private $m_getMemberId = "memberId";
		private $m_getDelete = "delete";
		private $m_getEdit = "edit";
		private $m_getMemberButton = "memberButton";
		
		public function DoRegisterView() {
			return "
			<h2>Registrera medlem</h2>
			<form method='POST'>
				<fieldset>
					<legend>Registrering</legend>
						<p><label>Förnamn:</label> <input type='text' name='$this->m_getFirstName' id='firstname' /></p>
						<p><label>Efternamn:</label> <input type='text' name='$this->m_getLastName' id='lastname' /></p>
						<p><label>Telefon:</label> <input type='text' name='$this->m_getPhone' id='phone' /></p>
						<p><input type='submit' value='Registrera' name='$this->m_getRegister' id='register' /></p>
				</fieldset>
			</form>
			";
		}
		
		public function DoEditView() {
			return"
			<h2>Ä medlem</h2>
			<form method='POST'>
				<fieldset>
					<legend>Ändra medlem</legend>
						<p><label>Medlemsnummer:</label> <input type='text' name='$this->m_getMemberId' id='memberId' /></p>
						<p><label>Förnamn:</label> <input type='text' name='$this->m_getFirstName' id='firstname' /></p>
						<p><label>Efternamn:</label> <input type='text' name='$this->m_getLastName' id='lastname' /></p>
						<p><label>Telefon:</label> <input type='text' name='$this->m_getPhone' id='phone' /></p>
						<p><input type='submit' value='Ändra uppgifter' name='$this->m_getEdit' id='register' /></p>
				</fieldset>
			</form>
			";
		}
		
		public function DoDelete() {
			return "
			<h2>Radera medlem</h2>
			<form method='POST'>
				<fieldset>
					<legend>Skriv in id</legend>
					<p><label>Medlemsnummer:</label> <input type='text' name='$this->m_getMemberId' id='memberId' /></p>
					<p><input type='submit' value='Radera medlem' name'$this->m_getDelete' id='delete' />
				</fieldset>
			</form>
			";
		}
		
		public function DoViewMember() {
			return "
			<h2>Visa medlem</h2>
			<form method='POST'>
				<fieldset>
					<legend>Skriv in id</legend>
					<p><label>Medlemsnummer:</label> <input type='text' name='$this->m_getMemberId' id='memberId' /></p>
					<p><input type='submit' value='Visa medlem' name'$this->m_getMemberButton' id='register' />
				</fieldset>
			</form>
			";
		}
		
		//HÄMTA FÄLT
		//private $m_getRegister = "register";
		//private $m_getDelete = "delete";
		public function GetFirstName() {
			if (isset($_POST[$this->m_getFirstName]) != null) {
				return $_POST[$this->m_getFirstName];
			}
			else {
				return null;
			}
		}
		
		public function GetLastName() {
			if (isset($_POST[$this->m_getLastName]) != null) {
				return $_POST[$this->m_getLastName];
			}
			else {
				return null;
			}
		}
		
		public function GetPhone() {
			if (isset($_POST[$this->m_getPhone]) != null) {
				return $_POST[$this->m_getPhone];
			}
			else {
				return null;
			}
		}
		
		public function GetMemberId() {
			if (isset($_POST[$this->m_getMemberId]) != null) {
				return $_POST[$this->m_getMemberId];
			}
			else {
				return null;
			}
		}
		
		public function TriedToRegister() {
			if (isset($_POST[$this->m_getRegister]) != null) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		
		public function TriedToEdit() {
			if (isset($_POST[$this->m_getEdit]) != null) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		
		public function TriedToDelete() {
			if (isset($_POST[$this->m_getDelete]) != null) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		
		public function TriedToView() {
			if (isset($_POST[$this->m_getMemberButton]) != null) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		
		
		
		
	}
?>