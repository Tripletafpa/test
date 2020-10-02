<?php 
	$page = 3;
	require('include/header.php');
?>

<div class="row">
    <?php
		require "connexion.php"; // Inclusion de notre bibliothèque de fonctions
		$db = connexionBase(); // Appel de la fonction de connexion
		$requete = "SELECT * FROM products INNER JOIN categories WHERE cat_id = 1";

		$result = $db->query($requete);

		// Table responsive
		echo '<div class="table-responsive col-12 col-sm-12 col-lg-12">';
			echo '<table class="table table-hover table-striped table-bordered">';

				// Header de la table (Titre des champs)
				echo'<thead class="thead-light">';
					echo"<tr>";
						echo"<th>Photos</th>";
						echo"<th>ID</th>";
						echo"<th>Référence</th>";
						echo"<th>Libellé</th>";
						echo"<th>Prix</th>";
						echo"<th>Stock</th>";
						echo"<th>Couleur</th>";
						echo"<th>Ajout</th>";
						echo"<th>Modif</th>";
						echo"<th>Bloqué</th>";
					echo"</tr>";
				echo"</thead>";

				// Ouverture du body en dehors de la boucle -> (fermeture aussi)
				echo"<tbody>";
				// Code pour insertion des différentes données
				while ($row = $result->fetch(PDO::FETCH_OBJ))
				{
				echo"<tr>";
					// Images
					echo'<td class="table-warning"><img src="src/img/'.$row->pro_id.'.'.$row->pro_photo.'" class="img-fluid rounded" alt="Image produit" title="Image produit" width="100px"></td>';
					// ID
					echo"<td>".$row->pro_id."</td>";
					// Références
					echo"<td>".$row->pro_ref."</td>";
					// Libellés
					echo'<td class="table-warning align-middle text-center text-uppercase"><b><u><a class="text-danger" href="detail.php?pro_id='.$row->pro_id.'" title='.$row->pro_libelle.'>'.$row->pro_libelle.'</a></b></u></td>';
	?>