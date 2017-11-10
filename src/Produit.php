<?php 

abstract class Produit 
{
   protected $nomProduit = 0;
   protected $poidsProduit = 10;
   protected $prixKilo = 10;
   protected $nombreProduit = 20;
   protected $prixUnite = 5;

   public static $compteur = 0 ;
	public function __construct() {
      echo "Construction d'un produit";

      self::$compteur++;
	}

   public abstract function calculPrix();   
}
?>

