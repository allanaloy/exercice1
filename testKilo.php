<?php

	ini_set('display_errors','1');
	require_once("src/Kilo.php");

	$c = new Kilo();
	echo $c;

	$prix = $c->calculPrix();	
	echo "<br>le prix est ".$prix;
	echo "<br> Le nombre de produit créés est :".Produit::$compteur;

?>