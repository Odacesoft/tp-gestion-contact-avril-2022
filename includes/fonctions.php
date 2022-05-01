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
        if(count($donnes)!=5){
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


    function TotalContact(){
        $db=SeConnecter();
        $sql="SELECT count(*) as total FROM bd_contacts.contacts";
        $t=0;
        try {
            //code...
           // var_dump($db);
            $Selection=$db->query($sql);
            $resultat=$Selection->fetch();
            $t=isset($resultat['total'])?$resultat[0]:0;
            $Selection->closeCursor();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $t;
        //print_r($resultat);
    }
    
    function Contacts($n,$p){
        $db=SeConnecter();
        $nb=$n;
        $offset=$n*($p-1);
        //echo  $nb_v."===".$offset;
        //1=0,10
        //2=10,10
        //3=20,10
        $sql="SELECT id,`nom_prenom`, `tel_mobile` FROM bd_contacts.contacts LIMIT $offset,$n";
        $t=0;
        try {
            //code...
           // var_dump($db);
            $Selection=$db->query($sql);
            $resultat=$Selection->fetchAll();
            //$t=isset($resultat[0])?$resultat[0]:[];
            $Selection->closeCursor();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $resultat;
       // print_r($resultat);
    }
   // modification du contact
     function ModifierContact($donnes,$page="edit-contact"){
        $db=SeConnecter();
        $variableUpdate=FALSE;
        var_dump($donnes);
        exit();
        $sql1="UPDATE  `bd_contacts`.`contacts` SET `nom_prenom`=".$donnes[0].", `tel_mobile`=".$donnes[1].", `tel_fixe`=".$donnes[2].", `detail`=".$donnes[3]." WHERE  id=".$donnes[4]."";
           // var_dump($db);
            $Update=$db->query($sql1);
          //  $t=$Update->execute();
           
            try {
                //code...));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        if($t && $page!=""){
            $variableUpdate=TRUE;
           header('location:index.php?p='.$page);
        }else
       // echo "BBBBBBBBBBBBBB";
        return $variableUpdate;
    }

    function getContact($id){
        $db=SeConnecter();
        $sql="SELECT * FROM bd_contacts.contacts WHERE id= $id";
   
        try {

            $Selection=$db->query($sql);
            $result=$Selection->fetch();
           
            $Selection->closeCursor();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    
    }
?>