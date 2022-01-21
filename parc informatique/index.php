<?php
if(isset($_GET['page'])){
   require_once 'menu.php';

    switch($_GET['page']){
        case 'addserveur':
            require_once 'view/serveur/add.php';
        break;
        case 'addservice':
            require_once 'view/service/add.php';
        break;
        case 'listeserveur':
            require_once 'model/DB.php';
            require_once 'model/ServeurDao.php';
            $liste = listeServeur();
            if(isset($_GET['motcle'])){
                $liste = rechercher($_GET['motcle']);
            }
            require_once 'view/serveur/liste.php';
        break;
        case 'listeservice':
            require_once 'model/DB.php';
            require_once 'model/ServiceDao.php';
            $liste = listeService();
            if(isset($_GET['motcle'])){
                $liste = rechercher($_GET['motcle']);
            }
            require_once 'view/service/liste.php';
        break;
        case 'deleteserveur':
        break;
        case 'deleteservice':
        break;
        case 'editserveur':
            require_once 'model/DB.php';
            require_once 'model/ServeurDao.php';
            $serveur = getServeurById($_GET['id']);
            $ligne = mysqli_fetch_row($serveur);
            require_once 'view/serveur/edit.php';
        break;
        case 'editservice':
            require_once 'model/DB.php';
            require_once 'model/ServiceDao.php';
            $service = getServiceById($_GET['id']);
            $ligne = mysqli_fetch_row($service);
            require_once 'view/service/edit.php';
        break;
    }
}else{
    require_once 'menu.php';
}
?>