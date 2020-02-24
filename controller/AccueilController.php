<?php

require_once("model/LivreDao.php");
require_once("model/CD_Dao.php");
require_once("model/DVD_Dao.php");

class AccueilController{

		static function index() {
			$daoLivre = new LivreDao();
			$daoCd = new CD_Dao();
			$daoDvd = new DVD_Dao();

			$allLivres = $daoLivre->getall();
			// if(isset($_GET["recherche"])) {
			// 	$searchLivre = $daoLivre->getByName($_GET["recherche"]);
			// }
			$livre5Last = $daoLivre->get5LastLivre();
			$cd5Last = $daoCd->get5LastCd();
			$dvd5Last = $daoDvd->get5LastDvd();

			include("view/accueil/corps.php");
		}
}
