<?php
	class ListView {
		public function GenerateMemberList($arr) {
			$xhtml = "<h2>Medlemslista</h2>";
				for ($i=0; $i < count($arr); $i++) { 
					foreach ($arr[$i] as $key => $value) {
						$xhtml .= "<p> $key : $ value </p>";
					}
				}
			return $xhtml;
		}
	}

?>