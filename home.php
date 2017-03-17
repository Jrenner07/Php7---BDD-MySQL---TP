<?php
session_start();

if (isset($_SESSION['Connection'])) {

	if ($_SESSION['Connection'] == 'OK') {
		?>



		<!DOCTYPE html>
		<html>
			<head>
				<meta charset="utf-8"/>
				<title> App Web </title>
				<link rel="stylesheet" href="css.css" >
			</head>

			<body>
				<div class="cadre"  align="center">
					<h2> Home <br/></h2>
					<p>  ----------------------------------------------------------- </p><br/>
					<a role="button" href="seek.php">Recherche</a><br/><br/>
					<a role="button" href="add.php">Ajout</a><br/><br/>
					<a role="button" href="x.php">Page</a><br/><br/>
					<a role="button" href="x.php">Page</a><br/><br/>
					<a role="button" href="x.php">Page</a><br/><br/>
					<a role="button" href="logoff.php">Déconnection</a><br/><br/>
				</div>
			</body>
		</html>




			<?php
	}
} else {
	header('Location: index.php');
}

?>