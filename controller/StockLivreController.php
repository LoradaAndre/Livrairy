<?php

require_once("model/LivreDao.php");

class StocklivreController {

		static function index() {
			// $daoCd = new CD_Dao();
			$daoLivre = new LivreDao();

			$daoAllLivre = $daoLivre->getAll();


			include("view/gestionStock/gestionStockLivre.php");
		}
}
