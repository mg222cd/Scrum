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
			
		}
	}
?>