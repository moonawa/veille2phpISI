<?php
require_once '../model/DB.php';
require_once '../model/ServiceDao.php';
//for liste
//function verliste(){
    //$base_url = "http://localhost/isi-cour/php/veille2/parc%20informatique/";
    //header("location:$base_url?page=listeservice");
//}
//for add
if(isset($_POST['ajoutservice'])){
    // $noms = $_POST['noms'];
    // $ports = $_POST['ports'];
    // $etats = $_POST['etats'];
    // $idserv = $_POST['idserv'];
    extract($_POST);
    //echo $nomservice;
    addService($noms, $ports, $etats, $idserv);
    $base_url = "http://localhost/isi-cour/php/veille2/parc%20informatique/";
    header("location:$base_url?page=listeservice");
}
//for delete
if(isset($_GET['id'])){
    deleteService($_GET['id']);
    $base_url = "http://localhost/isi-cour/php/veille2/parc%20informatique/";
    header("location:$base_url?page=listeservice");
}

//for edit
if(isset($_POST['editservice'])){
    $id = $_POST['id'];
    $noms = $_POST['noms'];
    $ports = $_POST['ports'];
    $etats = $_POST['etats'];
    $idserv = $_POST['idserv'];  
    updateService($id, $noms, $ports, $etats, $idserv);
    $base_url = "http://localhost/isi-cour/php/veille2/parc%20informatique/";
    header("location:$base_url?page=listeservice");
}