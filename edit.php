
<!doctype html>

<html>

<head>
    <title> ENTREPRISES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>

<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-primary"> Les Entreprises</h1>
            <form method="post" action="modifier.php">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody>

                <?php
                //require_once("connection.php");
             include ('connextion.php');

                //db variable declaree dans le fichier connexion


                $req="select * from entreprise WHERE id='" . $_GET['id'] . "'";
                $res=$db->query($req);
                $Delete="Delete";
                $Edit="Edit";
                $Res=$res->fetchAll(PDO::FETCH_ASSOC);

                for ($i=0;$i<count($Res);$i++)
                {
                    echo '<tr>';
                    foreach ($Res[$i] as $v){
                        echo "<td>"."<input type='text' value='$v'" ."</td>";




                    }

                    echo '</tr>';

                }
                echo '<tr>';
                echo '<td>';
                echo ' <input class="btn btn-danger" type="submit" value="update">';
                echo '</td>';
                echo '</tr>';
                ?>

                </tbody>


            </table>
            </form>

        </div>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>




