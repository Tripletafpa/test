<?php 
	$page = 4;
	require('include/header.php');
?>

<?php
	require "connexion.php"; // Inclusion de notre bibliothèque de fonctions

	$db = connexionBase(); // Appel de la fonction de connexion
    $pro_id = $_GET["pro_id"];
    $cat_id = $_GET["pro_id"];
    $requete = "SELECT * FROM products INNER JOIN categories ON cat_id = pro_cat_id WHERE pro_id=".$pro_id;
    
    $result = $db->query($requete);

	// Renvoi de l'enregistrement sous forme d'un objet
    $products = $result->fetch(PDO::FETCH_OBJ);
?>

<div class="row ml-2">
    <div class="col-12 col-sm-12 col-lg-12">
        <h2 class="text-center mb-4">Détail du produit</h2>
		<form action="details.php" method="POST">
			<fieldset>
                <!-- Image du produit -->
                <div class="row justify-content-center">
                    <img src="src/img/<?php echo $products->pro_id.'.'.$products->pro_photo; ?>" class="img-fluid" alt="Image produit" title="Image produit" width="250px"> 
                </div>

                <!-- Champ ID -->
                <div class="form-group">
                    <label for="id">ID :</label>
                    <input type="text" class="form-control" id="id" value="<?php echo $products->pro_id; ?>" disabled>
                </div>
                
                <!-- Champ Référence -->
                <div class="form-group">
                    <label for="reference">Référence :</label>
                    <input type="text" class="form-control" id="reference" value="<?php echo $products->pro_ref; ?>" disabled>
                </div>
                
                <!-- Champ Catégorie -->
                <div class="form-group">
                    <label for="categorie">Catégorie :</label>
                    <input type="text" class="form-control" id="categorie" value="<?php echo $products->cat_name; ?>" disabled>
                </div>
                
                <!-- Champ Libellé -->
                <div class="form-group">
                    <label for="libelle">Libellé :</label>
                    <input type="text" class="form-control" id="libelle" value="<?php echo $products->pro_libelle; ?>" disabled>
                </div>
                
                <!-- Champ Description -->
                <div class="form-group">
					<label for="description">Description :</label>
					<textarea class="form-control" name="description" id="description" disabled><?php echo $products->pro_description; ?></textarea>
                </div>
                
                <!-- Champ Prix -->
                <div class="form-group">
                    <label for="prix">Prix :</label>
                    <input type="text" class="form-control" id="prix" value="<?php echo $products->pro_price; ?>" disabled>
                </div>
                
                <!-- Champ Stock -->
                <div class="form-group">
                    <label for="stock">Stock :</label>
                    <input type="text" class="form-control" id="stock" value="<?php echo $products->pro_stock; ?>" disabled>
                </div>
                
                <!-- Champ Couleur -->
                <div class="form-group">
                    <label for="couleur">Couleur :</label>
                    <input type="text" class="form-control" id="couleur" value="<?php echo $products->pro_color; ?>" disabled>
                </div>
                
                <!-- Radio (oui/non) Produit bloqué -->
                <div class="form-group">
                    <p>Produit bloqué ? :</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bloque" id="bloque" value="oui" <?php if(isset($products->pro_locked) != NULL || 0) {echo "checked";} ?> disabled>
                        <label class="form-check-label" for="bloque">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bloque" id="bloque" value="non" <?php if(isset($products->pro_locked) == NULL || 0) {echo "checked";} ?> disabled>
                        <label class="form-check-label" for="bloque">Non</label>
                    </div>
                </div>
                
                <!-- Champ Date d'ajout -->
                <div class="form-group">
                    <label for="date_ajout">Date d'ajout :</label>
                    <input type="text" class="form-control" id="date_ajout" value="<?php echo $products->pro_date_added; ?>" disabled>
                </div>
                
                <!-- Champ Date modification -->
                <div class="form-group">
                    <label for="date_modif">Date de modification :</label>
                    <input type="text" class="form-control" id="date_modif" value="<?php echo $products->pro_date_modif; ?>" disabled>
                </div>
			</fieldset>
		</form>
        <!-- Bouton Retour -->
		<a href="products.php"><input type="button" value="Retour" class="btn btn-dark mb-3"></a>
		<!-- Bouton Modifier -->
		<a href="update_form.php?pro_id=<?php echo $pro_id;?>"><input type="button" value="Modifier" class="btn btn-warning mb-3"></a>
        <!-- Bouton Supprimer -->
		<a href="delete_form.php?pro_id=<?php echo $pro_id;?>"><input type="button" value="Supprimer" class="btn btn-danger mb-3"></a>
	</div>
</div>

<?php 
	require('include/footer.php');
?>