<?php
try {
	$db = new PDO('mysql:host=localhost;dbname=gestionParcinfo', 'root', '');
} catch (Exception $e) {
	die("Erreur : ".$e->getMessage());
}

?>