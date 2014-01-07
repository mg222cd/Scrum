<?php
	require_once ("MasterController.php");
	$masterController = new MasterController();
	$xhtml = $masterController->DoControll();
?>

<!DOCTYPE html>
	<head>
		<title>Labb 5 - Scrum</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	
	<body>
		<p>test</p>
		<?php
			echo $xhtml;
		?>
	</body>
</html>