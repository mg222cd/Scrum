<?php
	require_once("NavigationController.php");
	require_once("Member.php");
	require_once("DBConnection.php");
	require_once("settings.php");
	
	class MasterController {
		public function DoControll(){
			$dbConnection = new DBConnection();
			$dbConnection->Connect();
			
			$member = new Member($dbConnection);
			$navigationController = new NavigationController($member);
			$xhtml = $navigationController->DoControll();
			$dbConnection->Close();
			return $xhtml;
		}
	}

?>