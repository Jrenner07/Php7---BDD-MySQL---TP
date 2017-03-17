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

		$req = $bdd->prepare('INSERT INTO client(Nom,Prenom,Adresse,Ville,CodePostal,Pays) VALUES(:Nom,:Prenom,:Adresse,:Ville,:CodePostal,:Pays)');

		$req->execute(array(
			'Nom' => $_POST['Nom'],
			'Prenom' => $_POST['Prenom'],
			'Adresse' => $_POST['Adresse'],
			'Ville' => $_POST['Ville'],
			'CodePostal' => $_POST['CodePostal'],
			'Pays' => $_POST['Pays']
			));

		echo 'Le client à bien été ajouter !';
	}
} else {
	header('Location: index.php');
}

?>

