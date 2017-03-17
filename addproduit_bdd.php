<?php
session_start();

if (isset($_SESSION['Connection'])) {

	if ($_SESSION['Connection'] == 'OK') {
		try
		{

			$bdd = new PDO('mysql:host=localhost;dbname=facture', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		}
			catch (Exception $e)
		{

			die('Erreur : ' . $e->getMessage());

		}

		?>
		<link rel="stylesheet" href="css.css" >
		<a role="button" href="home.php">Home</a><br/><br/>
		<?php

		$req = $bdd->prepare('INSERT INTO produit(Designation,PrixUnitaire) VALUES(:Designation,:PrixUnitaire)');

		$req->execute(array(
			'Designation' => $_POST['Nom'],
			'PrixUnitaire' => $_POST['prix']
			));

		echo 'Le produit à bien été ajouter !';
	}
} else {
	header('Location: index.php');
}

?>

