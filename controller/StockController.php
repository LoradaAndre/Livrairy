<?php

require_once("model/LivreDao.php");

class StockController {

		static function index() {
			$daoLivre = new LivreDao();
			// $daoCd = new CD_Dao();
			// $daoDvd = new DVD_Dao();

			$daoAllLivre = $daoLivre->getAll();
			//$Livre5Last = $daoLivre->get5Last();
			// $cd5Last = $daoCd->get5Last();
			// $dvd5Last = $daoDvd->get5Last();

			include("view/gestionStock/gestionStock.php");
		}
}
