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
                    <div class="card-header"> Formulaire de gestion de SERVICE</div>
                    <div class="card-body">
                        <form action="controller/ServiceController.php " method="POST">
                            <div class="mb-3">
                                <label  class="form-label" for="noms">Nom du service</label>
                                <input class="form-control" type="text" name="noms" id="noms"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="ports">Port du service</label>
                                <input class="form-control" type="text" name="ports" id="ports"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="etats">Etat  du service</label>
                                <select class="form-select" aria-label="Default select example" id="etats" name="etats">
                                    <option value="1">Activité</option>
                                    <option value="0">Désactivé</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="idserv">Serveur</label>
                                <select class="form-select" aria-label="Default select example" id="idserv" name="idserv">
                                    <option value="">Faites votre choix</option>
                                        <?php
                                        require_once 'model/DB.php';
                                        require_once 'model/ServeurDao.php';
                                        $serveurs= listeServeur();
                                        // foreach($serveurs as $key => $value){
                                        //     echo"<option value='".$value[0]."'>$value[0]</option>";  }
                                        while($ligne = mysqli_fetch_row($serveurs)){
                                            echo"<option value='".$ligne[0]."'>$ligne[1]</option>";
                                        }
                                        ?> 

                                </select> 
                            </div>
                           
                            
                            <div  class="mb-3">  
                                <input class="btn btn-success" type="submit" name="ajoutservice" id="ajoutservice" />
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