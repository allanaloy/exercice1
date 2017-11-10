<?php

	require_once("src/Unite.php");

	$d = new Unite();
	echo $d;
	
	$prix = $d->calculPrix();	
	echo "<br>le prix est ".$prix;
	echo "<br> Le nombre de produit créés est :".Produit::$compteur;

?>