<?php
include('../config/parameters.php');

try {
	$bdd = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8', $user , $password);

} catch (Exception $e) {
	die('Erreur : '.$e->getMessage());
};

$name = htmlspecialchars($_POST['name']);
$price = htmlspecialchars($_POST['price']);
$image = htmlspecialchars($_POST['image']);

$sql = sprintf("INSERT INTO produit(prod_name, prod_price, prod_image) VALUES ('%s', %d, '%s')", $name, $price, $image);

$req = $bdd->query($sql);


?>