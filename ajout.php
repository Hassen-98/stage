<?php
include ('connextion.php');

$name=$_POST['name'];
$address=$_POST['address'];


$req="insert into entreprise(name,address) values ('$name','$address')";
//db variable declaree dans le fichier connexion
$db->query($req);

header("location:index.php");
?>

<html>
<table >
    <tr>
<td>Nom </td>
        <td><?php echo($name) ?> </td>


    </tr>
    <tr>
        <td>Addeess</td>
        <td><?php echo($address) ?> </td>


    </tr>
</table>

</html>
