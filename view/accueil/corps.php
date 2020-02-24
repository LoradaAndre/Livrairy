<?php
	if(!isset($searchLivre)){
		$searchLivre = null;
	}

?>

<h2 class="text-center font-weight-bold">Dernières nouveautés</h2>
	<?php
	if(isset($livre5Last)){
		include("view/accueil/5dernierLivres.php");
	}
	if(isset($cd5Last)){
		include("view/accueil/5dernierCd.php");
	}
	if(isset($cd5Last)){
		include("view/accueil/5dernierDvd.php");
	}
	?>
