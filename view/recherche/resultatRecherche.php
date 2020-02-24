<h2>Résultats pour "<?php echo $_GET["recherche"]?>"</h2>

<?php
if(isset($_GET["recherche"])){
	if(isset($searchLivre)){
		include("view/recherche/resultatLivre.php");
	}
	if(isset($searchDvd)){
		include("view/recherche/resultatDvd.php");
	}
	if(isset($searchCd)){
		include("view/recherche/resultatCd.php");
	}
}
//ne marche pas...
if(!isset($searchCd) && !isset($searchDvd)  && !isset($searchLivre)){
	echo "désolé, nous n'avons pas trouvé de résultats corespondants";
}
