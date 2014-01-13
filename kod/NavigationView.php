<?php
	class NavigationView {
		private $m_getRegisterButton = "registerButton";
		private $m_getFullListButton = "fullList";
		private $m_getEditMemberButton = "editMember";
		private $m_getDeleteMemberButton = "deleteMember";
		private $m_getViewMemberButton = "viewMember";
		
		public function ShowStartButtons() {
			return "
			<h2>Hej!</h2>
			<form method='POST'>
				<fieldset>
					<legend>Vad vill du göra?</legend>
						<input type='submit' value='Registrera medlem' name='$this->m_getRegisterButton' id='registerButton' /><br />
						<input type='submit' value='Generera medlemslista' name='$this->m_getFullListButton' id='fullList' /><br />
						<input type='submit' value='Ändra medlem' name='$this->m_getEditMemberButton' id='editMember' /><br />
						<input type='submit' value='Radera medlem' name='$this->m_getDeleteMemberButton' id='deleteMember' /><br />
						<input type='submit' value='Visa Medlem' name='$this->m_getViewMemberButton' id='viewMember' /><br />
				</fieldset>
			</form>
			";
		}
		
		public function TriedToRegisterMember() {
			if (isset($_POST[$this->m_getRegisterButton]) == TRUE) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		
		public function TriedToGenerateFullList() {
			if (isset($_POST[$this->m_getFullListButton]) == TRUE ) {
				return TRUE
			}
			else {
				return FALSE;
			}
		}
		
		
	

	}
?>