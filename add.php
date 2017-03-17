<?php
session_start();

if (isset($_SESSION['Connection'])) { //Verification de la session

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
				<a role="button" href="home.php">Home</a><br/><br/>		<!--  Menu  -->
				<a role="button" href="logoff.php">Déconnection</a><br/><br/>
			</div>
				<div class="cadre"  align="center">
					<h2> Ajouts <br/></h2>				
					<p>  ----------------------------------------------------------- </p><br/>
					<div>
						<form method="POST" action="addclient.php">				
							<p>Client</p>
							<input type="submit" value="Ajouter un client" />		<!--  Ajout client  -->
						</form>
					</div>
					<br/>
					<br/>
					<div>
						<form method="POST" action="addproduit.php">
							<p>Produit</p>
							<input type="submit" value="Ajouter un produit" />		<!--  Ajout produit  -->
						</form>
					</div>
					<br/>
					<br/>
					
					<div>
						<form method="POST" action="addfacture.php">
							<p>Facture</p>
							<input type="submit" value="Ajouter une facture" />		<!--  Ajout facture  -->
						</form>
					</div>
					<br/>
					<br/>
					<div>
						<form method="POST" action="addd_facture.php">
							<p>Détail Facture</p>
							<input type="submit" value="Ajouter le detail d'une facture" />	<!--  Ajout détail facture  -->
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