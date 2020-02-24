<div class="contenu">
  <div class="row mt-3">
    <div class="col-lg-3">
      <img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
    </div>
	<!-- Partie centrale -->
    <div class="col-lg-6">
		<h2><?= $livreDetail["LIV_TITRE"] . " - Tome ". $livreDetail["LIV_TOME"]?></h2>
		<div class="row">
			<h5 class="col-lg-6">de <?= $livreDetail["AUTLIV_NOM"] . " " . $livreDetail["AUTLIV_PRENOM"] ?></h5>
			<h5 class="col-lg-6">Editeur: <?=  $livreDetail["EDI_LIBELLE"]?></h5>
		</div>
		<div class="mt-4">
			<span class="mt-3 text-muted">Résumé: </span><?= $livreDetail["LIV_DESCRIPTION"] ?>
		</div>
    </div>
	<!-- partie droite -->
    <div class="col-lg-3">
		<div class="border m-3 shadow p-3 mb-5 bg-white rounded m-2">
			<!-- Affichage du prix -->
			<div class=""> <!-- pl-3 text-left font-weight-bold -->
				<h4 class=" ml-4 mt-2 font-weight-bold"><?= $livreDetail["LIV_PRIX"] . "€"?></h3>
			</div>
			<!-- Affichage de la Disponibilité -->
			<div class="m-3">
				<?php
				if($livreDetail["LIV_QUANTITE"]  <= 0){
				?>
				<div class="  text-danger">
					<h5 class="">Rupture de stock</h5>
				</div>
				<?php
				}
				else{
				?>
				<div class="text-success ">
					<h5 class="">Disponible</h5>
				</div>
				<div class=" text-center row ml-2 mt-4 mb-3">
	   				<div class="">
	   					<?= "Quantité" ?>
	   				</div>
	    				<select class="form-control form-control-sm col-lg-4 ml-2">
	    					<?php
	    						for($i = 1; $i <=20; $i++){
	    							echo "<option>" . $i . "</option>";
	    						}
	    					 ?>

	    				</select>
    			</div>
				<?php
				}
				 ?>
			</div>
			<div class="text-center">
				<div class="m-2">
					<button type= "button" class= "btn btn-primary btn-sm col-lg-12" data-toggle="modal" data-target="#exampleModal"> Ajouter au pannier</button>
				</div>
				<div class="m-2">
					<button type= "button" class= "btn btn-primary btn-sm col-lg-12" data-toggle="modal" data-target="#exampleModal"> Commander</button>
				</div>
			</div>
		</div>
    </div>
  </div>
  <hr/>
  <div class="">
  	<h4>Description du produit:</h4>
	<?= "Langue: " . $livreDetail["LAN_LIBELLE"] ?>
	</br>
	<?= "Support: " . $livreDetail["SUPP_LIBELLE"] ?>
	</br>
	<?= "Genre: " . $livreDetail["GENLIV_LIBELLE"] ?>
	</br>
	<?= "ISBN: " . $livreDetail["LIV_ISBN"] ?>
	</br>
	<?= "Date de parution: " . date("d/m/Y", strtotime($livreDetail["LIV_DATE_PARUTION"])) ?>
	</br>
	<?= "Nombre de pages: " . $livreDetail["LIV_NB_PAGES"] ?>
	</br>
	<?= "Dimensions: " . $livreDetail["LIV_DIMENSIONS"]."cm" ?>
	</br>
	<?= "Poids: " . $livreDetail["LIV_POIDS"]."g" ?>
  </div>
   <hr/>
<?php
	//faut que la verif soit aussi différente de la série actuelle
	if(isset($simmRes)){
?>
		<div class="container">
			<h4>De la même série</h4>
			<div class="row">

<?php
				$compteur = 0;
				foreach ($simmRes as $livre) {
					if ($compteur >= 5) {
						break;
					}
					if($livre["LIV_ID"] != $_GET["id"]){
?>
						<div class="col-lg-2 border m-3 shadow p-3 mb-5 bg-white rounded">
							<!-- Image -->
							<div class="p-2">
								<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
								<div class="font-weight-bold text-center">
									<?php echo $livre["LIV_TITRE"] . "- Tome ". $livre["LIV_TOME"]; ?>
								</div>
								<div class="">
									<?php echo "Sortie: " . $livre["LIV_DATE_PARUTION"]; ?>
								</div>
								<div class="font-weight-bold text-right">
									<?php echo $livre["LIV_PRIX"] . "€"; ?>
								</div>
							 </div>
						</div>
<?php
						}
					$compteur++;
					}
?>
			</div>
		</div>
<?php
	}
?>
