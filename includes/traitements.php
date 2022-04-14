<?php
    $tab_menu=['contacts','favoris','groupes','new'];

    if(isset($_GET['p']) && in_array($_GET['p'],$tab_menu)){
        $page=strtolower(trim($_GET['p']));
    }else{
        $page="contacts";
    }
    
    switch($page){
        case "contacts":
            include_once('./includes/accueil.php');
            break;
            
        case "groupes":
            include_once('./includes/groupes.php');
            break;
        case "favoris":
            include_once('./includes/favoris.php');
            break;
        case "new":
            include_once('./includes/new.php');
            break;
        default:
            include_once('./includes/accueil.php');
            break;

    }
?>