<?php

require_once("model/LivreDao.php");

class LivreConstroller {

		static function index() {
			$dao = new LivreDao();
			$langues = $dao->getAll();

			include("view/livre/lister.php");
		}

}
