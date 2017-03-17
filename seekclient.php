<?php
session_start();

if (isset($_SESSION['Connection'])) {

	if ($_SESSION['Connection'] == 'OK') {
		
		if (isset($_POST['nom'])) {
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
			<div class="menu">
			<a role="button" href="home.php">Home</a><br/><br/>
			</div>
			<?php

			$req = $bdd->prepare('SELECT * FROM client WHERE Nom=?');
			$req->execute(array(htmlspecialchars($_POST['nom'])));

			if($req->rowCount() == 0){
				header('Location: seek.php');
			}

			while($donnees = $req->fetch()){
				?>
				<div class="cadre"  align="center">
					<ul style="list-style-type:none">
						<li><h1>Client : <?php echo $donnees['Nom'].' - '. $donnees['Prenom']?></h1></li>
						<li><a>Adresse : </a><?php echo $donnees['Adresse'].' - '. $donnees['Ville'].' - '. $donnees['CodePostal']?></li>
						<li><a>Pays : </a><?php echo $donnees['Pays']?></li>
						<li><a>Numéro du client : </a><?php echo $donnees['NumClient']?></li>
					</ul>
				</div>
				<?php
			}
		}
	}
} else {
	header('Location: index.php');
}

?>

