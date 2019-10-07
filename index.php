<?php 
	include("Pessoa.php");
	$Pessoa1 = new Pessoa(22, "Victor", "Fernandes");
	//var_dump($Pessoa1);
	$Pessoa2 = new Pessoa(21, "Jescrildo", "Jenosvaldo");
	//var_dump($Pessoa2);
	$json = json_encode($Pessoa1);
	echo $Pessoa1;
	echo "<br>";
	echo $json;a
	//echo $Pessoa2;
?>