<?php
	if(!isset($_POST["TitreCD"]))
		$_POST["TitreCD"] = null;
 ?>

 <form class="a" action="index.php" method="get">
	<input type="hidden" name="page" value="test"/>
	<input type="text" name="TitreCD" value="">
	<input type="submit" value="">
</form>

<?php

if($_POST["TitreCD"] != null) {
	echo "votre recherche était" .  $_POST["TitreCD"];
}

foreach($langues as $l) {
	echo "id : " . $l["ID"] . " libelle : " . $l["LIBELLE"] . "<br/>";
}
