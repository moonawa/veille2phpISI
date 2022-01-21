<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <title>Liste Service</title>
</head>
<body>
    <div class="container">
            <form action="" method="GET">
            <div class="row" style="width:533px; margin-top:33px; margin-left: 151px">

                <div class="col-md-6">
                <input type="hidden" name="page" value="listeservice" class="form-control input-sm-4" placeholder="saisir le nom du service">
 
                    <input type="text" name="motcle" class="form-control input-sm-4" placeholder="saisir le nom du service">
                </div>
                <div class="col-md-6">
                    <input class="btn btn-success" type="submit" value="rechercher"/>
                </div>
                </div>
            </form>
        <div class="row" style="margin-top: 33px;">
            <div class=" col-md-6">
                <div class="card">
                    <div class="card-header">Liste des services</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>Id</td>
                                <td>Nom service</td>
                                <td>Port service</td>
                                <td>Etat</td>
                                <td>Serveur</td>
                                <td>Action</td>
                                <td>Action</td>
                            </tr>
                            <?php
                            while ($service = mysqli_fetch_row($liste)) {
                                echo "<tr>
                                        <td>$service[0]</td>
                                        <td>$service[1]</td>
                                        <td>$service[2]</td>
                                        <td>$service[3]</td>
                                        <td>$service[4]</td>
                                        <td><a href='?page=editservice&id=$service[0]'>Editer</a></td>
                                        <td><a href='controller/ServiceController.php?id=$service[0]'>Supprimer</a></td>
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