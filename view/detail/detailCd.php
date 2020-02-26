<div class="contenu">
  <div class="row mt-3">
    <div class="col-lg-3">
      <img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
    </div>
	<!-- Partie centrale -->
    <div class="col-lg-6">
		<h2><?= $cdDetail["CD_TITRE"]?></h2>
		<div class="row">
			<h5 class="col-lg-6">de <?= $cdDetail["AUTCD_NOM"] . " " . $cdDetail["AUTCD_PRENOM"] ?></h5>
		</div>
    </div>
	<!-- partie droite -->
    <div class="col-lg-3">
		<div class="border m-3 shadow p-3 mb-5 bg-white rounded m-2">
			<!-- Affichage du prix -->
			<div class=""> <!-- pl-3 text-left font-weight-bold -->
				<h4 class=" ml-4 mt-2 font-weight-bold"><?= $cdDetail["CD_PRIX"] . "€"?></h3>
			</div>
			<!-- Affichage de la Disponibilité -->
			<div class="m-3">
				<?php
				if($cdDetail["CD_QUANTITE"]  <= 0){
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
	<?= "Genre musical: " . $cdDetail["GENMUS_LIBELLE"] ?>
	</br>
	<?= "Date de parution: " . date("d/m/Y", strtotime($cdDetail["CD_DATE_PARUTION"])) ?>
	</br>
	<?= "Nombre de cd: " . $cdDetail["CD_NB_CD"] ?>
	</br>
	<?= "Nombre de titre: " . $cdDetail["CD_NB_TITRE"] ?>
   <hr/>
