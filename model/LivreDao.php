<?php

require_once("model/BDD.php");

class LivreDao extends BDD {

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		return $this->bdd->query("SELECT * FROM LIVRE, AUTEUR_LIVRE, EDITEUR, LANGUE, GENRE_LIVRE, SUPPORT WHERE LIVRE.LIV_ID_AUTEUR = AUTEUR_LIVRE.AUTLIV_ID AND LIVRE.LIV_ID_EDITEUR = EDITEUR.EDI_ID AND LIVRE.LIV_ID_LANGUE = LANGUE.LAN_ID AND LIVRE.LIV_ID_SUPPORT = SUPPORT.SUPP_ID AND LIVRE.LIV_ID_GENRE = GENRE_LIVRE.GENLIV_ID ;")->fetchAll();
	}

	function getById($id) {
		$req = $this->bdd->prepare("SELECT * FROM LIVRE, AUTEUR_LIVRE, EDITEUR, LANGUE, GENRE_LIVRE, SUPPORT WHERE LIVRE.LIV_ID_AUTEUR = AUTEUR_LIVRE.AUTLIV_ID AND LIVRE.LIV_ID_EDITEUR = EDITEUR.EDI_ID AND LIVRE.LIV_ID_LANGUE = LANGUE.LAN_ID AND LIVRE.LIV_ID_SUPPORT = SUPPORT.SUPP_ID AND LIVRE.LIV_ID_GENRE = GENRE_LIVRE.GENLIV_ID AND LIV_ID = ? ;");
		$req->execute(array($id));
		return $req->fetch();
	}

	function getByName($name) {
		$req = "SELECT * FROM LIVRE, AUTEUR_LIVRE, EDITEUR, LANGUE, GENRE_LIVRE, SUPPORT WHERE LIVRE.LIV_ID_AUTEUR = AUTEUR_LIVRE.AUTLIV_ID AND LIVRE.LIV_ID_EDITEUR = EDITEUR.EDI_ID AND LIVRE.LIV_ID_LANGUE = LANGUE.LAN_ID AND LIVRE.LIV_ID_SUPPORT = SUPPORT.SUPP_ID AND LIVRE.LIV_ID_GENRE = GENRE_LIVRE.GENLIV_ID AND LIVRE.LIV_TITRE LIKE :name ;";
		$requete = $this->bdd->prepare($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$requete->execute(array(':name' => "%" . $name . "%"));
		return $requete->fetchAll();
	}

	function getByRealisateur($auteur) {
		$req = "SELECT * FROM LIVRE, AUTEUR_LIVRE WHERE LIVRE.LIV_ID_AUTEUR = AUTEUR_LIVRE.AUTLIV_ID AND ( AUTEUR_LIVRE.AUTLIV_NOM LIKE :auteur OR AUTEUR_LIVRE.AUTLIV_PRENOM LIKE :auteur );";
		$requete = $this->bdd->prepare($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$requete->execute(array(':auteur' => "%" . $auteur . "%", ':auteur' => "%" . $auteur . "%"));
		return $requete->fetchAll();
	}

	function getAlerteOrangeLivre(){
		return $this->bdd->query("SELECT * FROM LIVRE WHERE LIVRE.LIV_QUANTITE <50 AND LIVRE.LIV_QUANTITE > 10;")->fetchAll();
	}

	function getAlerteRougeLivre(){
		return $this->bdd->query("SELECT * FROM LIVRE WHERE LIVRE.LIV_QUANTITE < 10 AND LIVRE.LIV_QUANTITE > 0")->fetchAll();
	}

	function getRuptureDeStockLivre(){
		return $this->bdd->query("SELECT * FROM LIVRE WHERE LIVRE.LIV_QUANTITE <= 0")->fetchAll();
	}

	function get5LastLivre(){
		return $this->bdd->query("SELECT * FROM LIVRE, AUTEUR_LIVRE, EDITEUR, LANGUE, GENRE_LIVRE, SUPPORT WHERE LIVRE.LIV_ID_AUTEUR = AUTEUR_LIVRE.AUTLIV_ID AND LIVRE.LIV_ID_EDITEUR = EDITEUR.EDI_ID AND LIVRE.LIV_ID_LANGUE = LANGUE.LAN_ID AND LIVRE.LIV_ID_SUPPORT = SUPPORT.SUPP_ID AND LIVRE.LIV_ID_GENRE = GENRE_LIVRE.GENLIV_ID ORDER BY LIVRE.LIV_DATE_PARUTION DESC LIMIT 5;")->fetchAll();
	}

	function getStock($id){
		$req = $bdd->prepare("SELECT LIV_QUANTITE FROM LIVRE WHERE LIV_ID = ? ;");
		$req->execute(array($auteur, $auteur));
		return $req->fetch();
	}
}
