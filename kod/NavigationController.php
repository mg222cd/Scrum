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
			elseif ($navigationView->TriedToGenerateFullList() == TRUE) {
				$xhtml .=$listView->GenerateMemberList($this->m_member->GetFullMemberList());
			}
			elseif ($navigationView->TriedToEditMember() == TRUE) {
				$xhtml .= $memberView->DoEditView();
			}
			elseif ($navigationView->TriedToDeleteMember()) {
				$xhtml .= $memberView->DoDelete();
			}
			elseif ($navigationView->TriedToViewMember()) {
				$xhtml .= $memberView->DoViewMember();
			}
			else {
				$xhtml .= $navigationView->ShowStartButtons();
			}
			
			if ($memberView->TriedToRegister()) {
				try	{
					$this->m_member->CreateMember($memberView->GetFirstName(), $memberView->GetLastName(), $memberView->GetPhone());
				} catch (Exception $e) {
					//throw new Exception($e->getMessage());
					throw new Exception ("Kunde inte skapa ny medlem"); 
				}
			}
			
			if ($memberView->TriedToEdit()) {
				try	{
					$this->m_member->EditMember($memberView->GetMemberId(), $memberView->GetFirstName(), $memberView->GetLastName(), $memberView->GetPhone());
				} catch (Exception $e) {
					//throw new Exception($e->getMessage());
					throw new Exception ("Kunde inte ändra medlem"); 
				}
			}
			
			if ($memberView->TriedToDelete()) {
				try	{//$xhtml .= "går in i delete";
					$this->m_member->DeleteMember($memberView->GetMemberId());
				} catch (Exception $e) {
					//throw new Exception($e->getMessage());
					throw new Exception ("Kunde inte radera medlem"); 
				}
			}
			
			if ($memberView->TriedToView()) {
				try	{$xhtml .= $listView->GenerateMemberList($this->m_member->GetMemberById($memberView->GetMemberId()));
				} catch (Exception $e) {
					//throw new Exception($e->getMessage());
					throw new Exception ("Kunde inte visa medlem"); 
				}
			}
			//sist
			return $xhtml;
		}
	}
?>