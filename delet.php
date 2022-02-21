<?php


include ('connextion.php');

$id=$_GET['id'];
$req="delete from entreprise  where (id=$id)";
//db variable declaree dans le fichier connexion
$db->query($req);


header("location:index.php");