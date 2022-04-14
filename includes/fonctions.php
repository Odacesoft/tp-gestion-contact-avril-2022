<?php
    function SeConnecter(){
        $pdo=NULL;
        try{
            $host="mysql:host=localhost;dbname=g_contacts";
            $user="root";
            $pass=NULL;

            $pdo=New PDO($host,$user,$pass);

        }catch(PDOException $e){
            var_dump($e->getMessage());
        }
        return $pdo;
    }

    function AjoutContact($donnes,$page="contacts"){
        $db=SeConnecter();
        $variableInsere=FALSE;
        if(count($donnes)!=4){
           // return FALSE;
            echo "Hghdghjzzdjhghkjgzdjghzd";
        }
        $sql="INSERT INTO `bd_contacts`.`contacts` ( `nom_prenom`, `tel_mobile`, `tel_fixe`, `detail`) VALUES ('".$donnes[0]."', '".$donnes[1]."', '".$donnes[2]."', '".$donnes[3]."')";
        try {
            //code...
           // var_dump($db);
            $Insertion=$db->prepare($sql);
            $t=$Insertion->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        if($t && $page!=""){
            $variableInsere=TRUE;
           header('location:index.php?p='.$page);
        }else
       // echo "BBBBBBBBBBBBBB";
        return $variableInsere;
    }
?>