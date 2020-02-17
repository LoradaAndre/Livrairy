<?php

require_once("model/LivreDao.php");
// require_once("model/CD_Dao.php");
// require_once("model/DVD_Dao.php");

class AccueilController {

		static function index() {
			$daoLivre = new LivreDao();
			// $daoCd = new CD_Dao();
			// $daoDvd = new DVD_Dao();

			$allLivres = $daoLivre->getall();
			// if(isset($_GET["recherche"])) {
			// 	$searchLivre = $daoLivre->getByName($_GET["recherche"]);
			// }
		//	$Livre5Last = $daoLivre->get5Last();
			// $cd5Last = $daoCd->get5Last();
			// $dvd5Last = $daoDvd->get5Last();

			include("view/accueil/corps.php");
		}
}
