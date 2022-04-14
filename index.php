<?php
    include('./includes/fonctions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des contracts</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div id="menu_haut">

    </div>
    <div id="bloc_contacts">
        <div>
          <h3 class="entete_type3">Contacts</h3>  
          <p class="p_desc">Gérez facilement vos contacts</p>
        </div>
        <nav id="menu_tabs">
            <ul>
                <li><a href="index.php?p=contacts">Contacts <span>50</span></a></li>
                <li><a href="index.php?p=favoris">Favoris</a></li>
                <li><a href="index.php?p=groupes">Groupes</a></li>
                <li><a href="index.php?p=new" class="btn_nouveau">+ Nouveau</a></li>
            </ul>
        </nav>
        <div id="bloc_list_contact">
            <?php
                SeConnecter();
                include_once('includes/traitements.php')
            ?>
        </div>
    </div>
    
</body>
</html>