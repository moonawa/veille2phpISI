<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 33px;"> 
        <div class="row">
        <div class=" col-md-6">
                <div class="card">
                    <div class="card-header"> Formulaire de gestion de SERVEUR</div>
                    <div class="card-body">
                        <form action="controller/ServeurController.php " method="POST">
                            <div class="mb-3">
                                <label  class="form-label" for="nom">NOM DU SERVEUR</label>
                                <input class="form-control" type="text" name="nomserv" id="nomserv"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="adresse">Adresse IP du serveur</label>
                                <input class="form-control" type="text" name="adripserv" id="adripserv"/>
                            </div>
                           
                            
                            <div  class="mb-3">  
                                <input class="btn btn-success" type="submit" name="ajoutserveur" id="ajoutserveur" />
                                <input class="btn btn-danger" type="reset" name="reset" id="annuler" value="Annuler"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>