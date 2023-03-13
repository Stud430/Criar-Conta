



<?php


function getConnection(){

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "tecinfo";

global $pdo;
try{
	//orientado a objetos com pdo
	$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $pdo;
} catch (PDOException $e){
	echo "ERRO: ".$e->getMessage();
}
}

?>


