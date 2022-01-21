<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer</title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class=" col-md-6">
                <div class="card">
                    <div class="card-header"> Formulaire de modification de Service</div>
                    <div class="card-body">
                        <form action="controller/ServeurController.php " method="POST">
                            <div class="mb-3">
                                <label  class="form-label" for="nom">NOM DU SERVICE</label>
                                <input class="form-control" type="text" name="noms" id="noms" value=" <?php echo $ligne[1]; ?>" />
                                <input class="form-control" type="hidden" name="id"  value=" <?php echo $ligne[0]; ?>" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="adresse">PORT DU SERVICE</label>
                                <input class="form-control" type="text" name="ports" id="ports" value=" <?php echo $ligne[2]; ?>" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="adresse">ETAT DU SERVICE</label>
                                <input class="form-control" type="text" name="etats" id="etats" value=" <?php echo $ligne[3]; ?>" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="adresse">SERVEUR</label>
                                <input class="form-control" type="text" name="idserv" id="idserv" value=" <?php echo $ligne[4]; ?>" />
                            </div>
                           
                            
                            <div  class="mb-3">  
                                <input class="btn btn-success" type="submit" name="editservice" id="editservice" value="Modifier" />
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