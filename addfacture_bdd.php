<?php
session_start();

date_default_timezone_set('UTC');

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
		<a role="button" href="home.php">Home</a><br/><br/>	<!--  Menu  -->
		<?php

		$req = $bdd->prepare('INSERT INTO facture(DateFacture,NumClient) VALUES(:DateFacture,:NumClient)');

		$req->execute(array(
			'NumClient' => $_POST['numcli'],
			'DateFacture' => date('Y-m-d')
			));

		echo 'La facture à bien été ajouter !';
	}
} else {
	header('Location: index.php');
}

?>

