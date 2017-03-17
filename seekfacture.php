<?php
session_start();

if (isset($_SESSION['Connection'])) {

	if ($_SESSION['Connection'] == 'OK') {
		
		if (isset($_POST['facture'])) {
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

			$req1 = $bdd->prepare('SELECT * FROM facture WHERE NumFacture=?');
			$req1->execute(array(htmlspecialchars($_POST['facture'])));

			if($req1->rowCount() == 0){
				header('Location: seek.php');
			}

			while($donnees1 = $req1->fetch()){
				?>
				<div class="cadre"  align="center">
					<ul style="list-style-type:none">
						<li><h1>Facture n°<?php echo $donnees1['NumFacture']?></h1></li>
						<li><a>Numéro du client : <?php echo $donnees1['NumClient']?></a></li>
						<li><a>Date de la facture : <?php echo $donnees1['DateFacture']?></a></li>
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