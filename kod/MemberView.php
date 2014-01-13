<?php
	class MemberView {
		private $m_getFirstName = "firstname";
		private $m_getLastName = "lastname";
		private $m_getPhone = "phone";
		private $m_getRegister = "register";
		
		public function DoRegisterView() {
			return "
			<h2>Registrera medlem</h2>
			<form method='POST'>
				<fieldset>
					<legend>Registrering</legend>
						<p><label>Förnamn:</label> <input type='text' name='$this->m_getFirstName' id='firstname' /></p>
						<p><label>Efternamn:</label> <input type='text' name='$this->m_getLastName' id='lastname' /></p>
						<p><label>Telefon:</label> <input type='text' name='$this->m_getPhone' id='phone' /></p>
						<p><input type='submit' value='Registrera' name='$this->m_getRegister' id=''register' /></p>
				</fieldset>
			</form>
			";
		}
		
	}
?>