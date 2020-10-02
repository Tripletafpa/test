<?php 
	$page = 2;
	require('include/header.php');
?>

<div class="row ml-1 my-5">
    <?php
		require "connexion.php"; // Inclusion de notre bibliothèque de fonctions
		$db = connexionBase(); // Appel de la fonction de connexion
		$requete = "SELECT * FROM products";

		$result = $db->query($requete);

		if (!$result) 
		{
			$tableauErreurs = $db->errorInfo();
			echo $tableauErreur[2];
			die("Erreur dans la requête");
		}

		if ($result->rowCount() == 0) 
		{
		// Pas d'enregistrement
		die("La table est vide");
		}

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
					echo'<td class="table-warning align-middle text-center text-uppercase"><b><u><a class="text-danger" href="details.php?pro_id='.$row->pro_id.'" title='.$row->pro_libelle.'>'.$row->pro_libelle.'</a></b></u></td>';
					// Prix
					echo"<td>".$row->pro_price."</td>";
					// Stocks
					echo"<td>".$row->pro_stock."</td>";
					// Couleurs
					echo"<td>".$row->pro_color."</td>";
					// Date Ajout
					echo"<td>".$row->pro_date_added."</td>";
					// Date Modif
					echo"<td>".$row->pro_date_modif."</td>";
					// Bloqué
					echo"<td>".$row->pro_locked."</td>";
					echo"</tr>";
				}
				echo"</tbody>";
			echo "</table>";
		echo "</div>";
    ?>
</div>

<?php 
	require('include/footer.php');
?>
