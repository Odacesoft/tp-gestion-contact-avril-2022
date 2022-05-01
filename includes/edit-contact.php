
<?php 
$id=isset($_GET['id'])?($_GET['id']):0;
if(isset($_GET['id'])){
   /// $id=isset($_GET['id'])?$_GET['id']:0;
    if(isset($_POST['Modifier']
    )){
            exit();
            $nom=$_POST['nom_prenom'];
            $tel=$_POST['telephone'];
            $telfix=$_POST['telephone_fixe'];
            $details=$_POST['details'];
            $donnes=[0=>$nom,1=>$tel,2=>$telfix,3=>$details ,4=>$id];
            var_dump($donnes);
            exit();
            $Motifier=ModifierContact($donnes,'edit-contact');
           
        }
    }
?>    




<form class="c_form" action="?p=edit-contact&id=<?=$id?>" method="POST  ">
<?php

//$id=isset($_GET['id'])?$_GET['id']:0;
$c=null;
if($id){
    $c=getContact($id);
}
    print_r($id);
    var_dump($c);
     //exit();
?>    
<div class="bloc_input">
        <label>Nom et prénom  (*)</label>
        <input type="text" name="nom_prenom" value="<?php echo isset($c['nom_prenom'])?  $c['nom_prenom']:'' ?>">
    </div>
    <div class="bloc_input">
        <label>Téléphone Mobile   (*)</label>
        <input type="text" name="telephone"value="<?php echo isset($c['tel_mobile'])?  $c['tel_mobile']:'' ?>">
    </div>>
    </div>
    <div class="bloc_input">
        <label>Téléphone Fixe</label>
        <input type="text" name="telephone_fixe" value="<?php echo isset($c['tel_fixe'])?  $c['tel_fixe']:'' ?>">
    </div>
    <div class="bloc_input">
        <label>Détail </label>
        <textarea name="details" cols="20" rows="3" value="<?php echo $c['detail'] ;?>">

        </textarea>
    </div>



    <div class="bloc_btn">
       
    <input class="btn_nouveau" type="submit" value="Modifier" name="Modifier">
    </div>
</form>
