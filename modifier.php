<?php
include ('connextion.php');

if(isset($_POST['update'])){
   if(isset($_POST['name' ]) AND !empty($_POST['name'])) {

       if (isset($_POST['address']) and !empty($_POST['address'])){
           $name =$_POST['name'];
       $address = $_POST['address'];
       $id = $_GET['id'];

//db variable declaree dans le fichier connexion
       $update=$db->prepare('UPDATE entreprise SET name= ?, address= ? WHERE id = ?');

           $update->execute(array($name,$address,$id));


}
}
}


    //$id = $_POST['id'];
    //$name = $_POST['name'];
   // $address = $_POST['address'];


   // $req = "UPDATE `entreprise` SET (id = '$id', name= '$name',address = '$address')";
    //$db->query($req);


