<?php
require_once('Produit.php');
class Unite extends Produit{

	public function __construct(){
		echo "Création d'un produit ";
		parent::__construct();
	}

 	public function __toString(){
 		$text = "<hr> Unite ".
 				"<br> nombreProduit :".$this->nombreProduit.
 				"<br> prixUnite :".$this->prixUnite."<hr>";
 		return $text;
 	}

 	public function calculPrix(){
 		return floor($this->nombreProduit*$this->prixUnite);
 	}	
}
?>


