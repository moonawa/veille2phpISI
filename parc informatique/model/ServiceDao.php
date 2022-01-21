<?php
    function addService($noms, $ports, $etats, $idserv){
        $sql = "INSERT INTO service(ids, noms, ports, etats , idserv) VALUES (NULL, '$noms', '$ports', '$etats', '$idserv' )";
        return executeSQL($sql);
    }
    function deleteService($ids){
        $sql = "DELETE FROM service WHERE ids = $ids";
        return executeSQL($sql);
    }
    function updateService($ids, $noms, $ports, $etats, $idserv){
        $sql = "UPDATE service SET noms = '$noms', 
                                   ports = '$ports',
                                   etats = '$etats',
                                   idserv = '$idserv' 
                               WHERE ids = $ids" ;
        return executeSQL($sql);
    }
    function listeService(){
        $sql = "SELECT * FROM service";
        return executeSQL($sql);
    }
    function listeServiceConfigure(){
        $sql = "SELECT serv.ids, serv.noms, serv.ports
         FROM service serv, service s
         WHERE serv.ids = s.ids";
        return executeSQL($sql); 
    }

    function getServiceById($ids){
        $sql = "SELECT * FROM service WHERE ids = $ids";
        return executeSQL($sql); 
    }
    function rechercher($motcle){
        $sql = "SELECT * FROM service WHERE noms LIKE '%$motcle%'";
        return executeSQL($sql); 
    }