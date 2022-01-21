<?php
    function getConnexion(){
        $host = 'localhost';
        $user = 'flower';
        $password = 'Awa@771301409';
        $dbname = 'veille2parcinformatique';

        // $dsn ="mysql:host=$host;dbname=$dbname";
        // try{
        //     $db = new PDO( $dsn, $user, $password);
        // }catch(PDOException $ex){
        //     die('Error: '.$ex->getMessage());
        // }
        // return $db;
        $con = mysqli_connect($host, $user, $password, $dbname);
        return $con;

    }

    function executeSQL($sql){
        $execution = mysqli_query(getConnexion(), $sql);
        return $execution;
    }
?>