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
			<div class="menu">
				<a role="button" href="home.php">Home</a><br/><br/>
				<a role="button" href="logoff.php">Déconnection</a><br/><br/>
			</div>
				<div class="cadre" align="center">
					<h2> Recherche <br/></h2>
					<p>  ----------------------------------------------------------- </p><br/>
					<div>
						<form method="POST" action="seekclient.php">
							<p>Client</p>
							<input type="text" placeholder="Nom du client" id="nom" name="nom" required/>
							<input type="submit" value="Recherche" />
						</form>
					</div>
					<br/>
					<br/>
					<div>
						<form method="POST" action="seekfacture.php">
							<p>Facture</p>
							<input type="number" placeholder="Numéro de facture" id="facture" name="facture" required/>
							<input type="submit" value="Recherche" />
						</form>
					</div>
				</div>
			</body>
		</html>




<?php
	}
} else {
	header('Location: index.php');
}

?>