<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <title>Liste Serveur</title>
</head>
<body>
    <div class="container">
            <form action="" method="GET">
            <div class="row" style="width:533px; margin-top:33px; margin-left: 151px">

                <div class="col-md-6">
                <input type="hidden" name="page" value="listeserveur" class="form-control input-sm-4" placeholder="saisir le nom du serveur">
 
                    <input type="text" name="motcle" class="form-control input-sm-4" placeholder="saisir le nom du serveur">
                </div>
                <div class="col-md-6">
                    <input class="btn btn-success" type="submit" value="rechercher"/>
                </div>
                </div>
            </form>
        <div class="row" style="margin-top: 33px;">
            <div class=" col-md-6">
                <div class="card">
                    <div class="card-header">Liste des serveurs</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>Id</td>
                                <td>Nom serveur</td>
                                <td>Adresse ip serveur</td>
                                <td>Action</td>
                                <td>Action</td>
                            </tr>
                            <?php
                            while ($serveur = mysqli_fetch_row($liste)) {
                                echo "<tr>
                                        <td>$serveur[0]</td>
                                        <td>$serveur[1]</td>
                                        <td>$serveur[2]</td>
                                        <td><a href='?page=editserveur&id=$serveur[0]'>Editer</a></td>
                                        <td><a href='controller/ServeurController.php?id=$serveur[0]'>Supprimer</a></td>
                                       </tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>