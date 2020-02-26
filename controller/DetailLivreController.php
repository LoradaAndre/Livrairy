<?php

require_once("model/LivreDao.php");
require_once("model/CD_Dao.php");
require_once("model/DVD_Dao.php");

class DetailLivreController{

		static function index() {
			$daoLivre = new LivreDao();

			$livreDetail = $daoLivre->getById($_GET["id"]);
			$simmRes = $daoLivre->getByName($_GET["name"]);

			include("view/detail/detailLivre.php");
		}
}
