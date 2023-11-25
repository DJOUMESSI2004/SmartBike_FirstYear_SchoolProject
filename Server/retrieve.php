<?php
include "ConnectDB.php";

$rayon = $db->query("SELECT * from rayon ")->fetchAll();
$prix = $db->query("SELECT * from prix order by no_prix desc")->fetchAll();
$modele = $db->query("SELECT * from modele ")->fetchAll();
$p_cat = $db->query("SELECT * from categorie ")->fetchAll();
$vandeur = $db->query("SELECT * from vandeur ")->fetchAll();
$client = $db->query("SELECT * from client ")->fetchAll();
$commande = $db->query("SELECT * from commande ")->fetchAll();
$categorie = $db->query("SELECT * from categorie ")->fetchAll();
$panier_articles = $db->query("SELECT * from panier_articles ")->fetchAll();
$article = $db->query("SELECT * from articles order by no_article desc limit 8")->fetchAll();


?>