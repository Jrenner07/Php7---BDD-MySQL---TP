<?php
session_start();

if (isset($_SESSION['Connection'])) {	//Verification de la variable de session

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
				</div>
				<div class="cadre" align="center">
					<form method="POST" action="addclient_bdd.php">			<!--  Formulaire pour ajout du client  -->
							<table>
								<tr>
									<td align="right">
										<label for="Nom">Nom :</label>
									</td>
									<td>
										<input type="text" placeholder="Nom du client" id="Nom" name="Nom" required/>
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="Prenom">Prenom :</label>
									</td>
									<td>
										<input type="text" placeholder="Prenom du client" id="Prenom" name="Prenom" required/>
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="Adresse">Adresse :</label>
									</td>
									<td>
										<input type="text" placeholder="Adresse du client" id="Adresse" name="Adresse" required/>
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="Ville">Ville :</label>
									</td>
									<td>
										<input type="text" placeholder="Ville du client" id="Ville" name="Ville" required/>
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="CodePostal">Code Postal :</label>
									</td>
									<td>
										<input type="number" placeholder="Code Postal du client" id="CodePostal" name="CodePostal" required/>
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="Pays">Pays :</label>
									</td>
									<td>
										<input type="text" placeholder="Pays du client" id="Pays" name="Pays" required/>
									</td>
								</tr>
								<tr>
									<td></td>
									<td align="left">
										<br/>
										<input type="submit" value="Ajouter client" />
									</td>
								</tr>
							</table>
						</form>
					</div>
				</body>
			</html>
		<?php
	}
} else {
	header('Location: index.php');
}

?>

