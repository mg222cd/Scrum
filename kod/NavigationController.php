<?php
	require_once("Member.php");
	require_once("MemberView.php");
	require_once("ListView.php");
	require_once("NavigationView.php");

	class NavigationController {
		private $m_member;
		
		public function __construct(Member $member) {
			$this->m_member = $member;
		}
		
		public function DoControll() {
			$xhtml = "<h3>Labb 5 - Scrum</h3>";
			
			$memberView = new MemberView();
			$listView = new ListView();
			$navigationView = new NavigationView();
			
			if ($navigationView->TriedToRegisterMember() == TRUE) {
				$xhtml .= $memberView->DoRegisterView();
			}
			
			//sist
			return $xhtml;
		}
	}
?>