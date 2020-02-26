<?php

require_once("model/LivreDao.php");
require_once("model/CD_Dao.php");
require_once("model/DVD_Dao.php");

class DetailCdController{

		static function index() {
			$daoCd = new CD_Dao();

			$cdDetail = $daoCd->getById($_GET["id"]);
			$simmRes = $daoCd->getByName($_GET["name"]);

			include("view/detail/detailCd.php");
		}
}
