<?php
session_start();

if(isset($_POST['pseudo']) AND (isset($_POST['password']))){

	try
	{

		$bdd = new PDO('mysql:host=localhost;dbname=facture', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	}
	catch (Exception $e)
	{

		die('Erreur : ' . $e->getMessage());

	}

	$pseudo_form = htmlspecialchars($_POST['pseudo']);
	$password_form = htmlspecialchars($_POST['password']);

	$req = $bdd->prepare('SELECT password FROM membre WHERE PSEUDO =?');
	$req->execute(array($pseudo_form));


	if($req->rowCount() == 0){
		header('Location: index.php');
	}


	while($donnees = $req->fetch()){

		if(password_verify($password_form, $donnees['password'])){

			$req->closeCursor();
			$_SESSION['Connection'] = 'OK';
			header('Location: home.php');

		} else {

			header('Location:index.php');

		}
	}
}

?>