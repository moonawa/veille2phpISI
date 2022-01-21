<?php
require_once '../model/DB.php';
require_once '../model/ServeurDao.php';
//for liste
//function verliste(){
    //$base_url = "http://localhost/isi-cour/php/veille2/parc%20informatique/";
    //header("location:$base_url?page=listeserveur");
//}
//for add
if(isset($_POST['ajoutserveur'])){
    $nomserveur = $_POST['nomserv'];
    $adripserveur = $_POST['adripserv'];
    //echo $nomserveur;
    addServeur($nomserveur, $adripserveur);
    $base_url = "http://localhost/isi-cour/php/veille2/parc%20informatique/";
    header("location:$base_url?page=listeserveur");
}
//for delete
if(isset($_GET['id'])){
    deleteServeur($_GET['id']);
    $base_url = "http://localhost/isi-cour/php/veille2/parc%20informatique/";
    header("location:$base_url?page=listeserveur");
}

//for edit
if(isset($_POST['editserveur'])){
    $id = $_POST['id'];
    $nomserv = $_POST['nomserv'];
    $adripserv = $_POST['adripserv'];  
    updateServeur($id, $nomserv, $adripserv);
    $base_url = "http://localhost/isi-cour/php/veille2/parc%20informatique/";
    header("location:$base_url?page=listeserveur");
}