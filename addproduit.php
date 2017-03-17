<?php
session_start();

if (isset($_SESSION['Connection'])) {

	if ($_SESSION['Connection'] == 'OK') {
		?>
		<link rel="stylesheet" href="css.css" >
		<div class="menu">
			<a role="button" href="home.php">Home</a><br/><br/>
		</div>
		<div class="cadre"  align="center">
			<form method="POST" action="addproduit_bdd.php">
					<table>
						<tr>
							<td align="right">
								<label for="Nom">Nom du produit :</label>
							</td>
							<td>
								<input type="text" placeholder="Nom du produit" id="Nom" name="Nom" required/>
							</td>
						</tr>
						<tr>
							<td align="right">
								<label for="prix">Prix unitaire :</label>
							</td>
							<td>
								<input type="number" placeholder="Prix unitaire" id="prix" name="prix" required/>
							</td>
						</tr>
						<tr>
							<td></td>
							<td align="left">
								<br/>
								<input type="submit" value="Ajouter produit" />
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

