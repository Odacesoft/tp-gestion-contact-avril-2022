<form class="c_form" action="index.php?p=new" method="POST">
<?php
    if(isset($_POST['ajouter'])){
        if(isset($_POST['nom_prenom'],
        $_POST['telephone'],
        $_POST['telephone_fixe'],
        $_POST['details'],
        )){
            $nom=$_POST['nom_prenom'];
            $tel=$_POST['telephone'];
            $telfix=$_POST['telephone_fixe'];
            $details=$_POST['details'];
            $donnes=[0=>$nom,1=>$tel,2=>$telfix,3=>$details];
           
            $Ajout=AjoutContact($donnes,'contacts');

        }
    }
?>    
<div class="bloc_input">
        <label>Nom et prénom  (*)</label>
        <input type="text" name="nom_prenom" placeholder="Nom et prénoms">
    </div>
    <div class="bloc_input">
        <label>Téléphone Mobile   (*)</label>
        <input type="text" name="telephone" placeholder="+229 90 00 00 00">
    </div>
    <div class="bloc_input">
        <label>Téléphone Fixe</label>
        <input type="text" name="telephone_fixe" placeholder="+229 21 00 00 00">
    </div>
    <div class="bloc_input">
        <label>Détail </label>
        <textarea name="details" cols="20" rows="3">

        </textarea>
    </div>



    <div class="bloc_btn">
       
    <input class="btn_nouveau" type="submit" value="Ajouter" name="ajouter">
    </div>
</form>
