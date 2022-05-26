<?php
try {
	$pdo = new PDO("mysql:dbname=esquecisenha;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;

}