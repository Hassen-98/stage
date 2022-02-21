<?php
include ('connextion.php');

$cin = $_POST['cin'];
$fullname = $_POST['fullName'];
$post = $_POST['post'];
$company = $_POST['company'];

//if (is_numeric($cin)) {
  //  echo $cin . " is numberic";
//}else {
  //  echo $cin . " is not numberic";
//}
$req = "INSERT INTO employees (cin,fullname,post,company)values ('$cin','$fullname','$post','$company') ";

//$req = "INSERT INTO employees (cin,fullname,post,company)values ('$cin','$fullname','$post','$company')
//WHERE employees.company exists ( select name from entreprise )";


//db variable declaree dans le fichier connexion
$db->query($req);

header("location:saisieEmp.html");




