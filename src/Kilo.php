<?php
require_once('Produit.php');
class Kilo extends Produit{

	public function __construct(){
		echo "Création d'un produit ";
		parent::__construct();
	}

 	public function __toString(){
 		$text = "<hr> Kilo ".
 				"<br> poidsProduit :".$this->poidsProduit.
 				"<br> prixKilo :".$this->prixKilo."<hr>";
 		return $text;
 	}

 	public function calculPrix(){
 		return floor($this->prixKilo*$this->poidsProduit);
 	}
}



