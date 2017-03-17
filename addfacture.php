<?php
session_start();

if (isset($_SESSION['Connection'])) {			//Verification de la variable de session

	if ($_SESSION['Connection'] == 'OK') {
		?>
		<link rel="stylesheet" href="css.css" >
		<div class="menu">
			<a role="button" href="home.php">Home</a><br/><br/>
		</div>
		<div class="cadre"  align="center">
			<form method="POST" action="addfacture_bdd.php">
					<table>
						<tr>
							<td align="right">
								<label for="numcli">Numero de client :</label>
							</td>
							<td>
								<input type="number" placeholder="Numero de client" id="numcli" name="numcli" required/>	<!--  Formulaire d'ajout de facture  -->
							</td>
						</tr>
						<tr>
							<td></td>
							<td align="left">
								<br/>
								<input type="submit" value="Ajouter Facture" />
							</td>
						</tr>
					</table>
				</form>
			</div>
		<?php
	}
} else {
	header('Location: index.php');
}

?>

