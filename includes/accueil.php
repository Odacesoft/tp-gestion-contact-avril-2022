<table>
                <tr>
                    <th>#</th>
                    <th >
                        <form action="index.php" class="tform" method="GET">
                            <input type="search">
                        <button type="submit"><i class="icon-magnifier"></i>Rechercher</button>
                        </form>

                    </th>
                    <th>
                        Téléphone
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
                <?php 
                $nb_elt_pp=5;
                $total=TotalContact();
                $page_actu=isset($_GET['nbp'])?(int)$_GET['nbp']:1;
                
                $contacts= Contacts($nb_elt_pp,$page_actu);
                $nb_page=ceil($total/$nb_elt_pp);
                //print($nb_page);
                //print_r($contacts);
                foreach($contacts as $c) { 
                    print_r($c);
                ?>                 
                <tr>
                    <td><input type="checkbox" name="contact_check" value="1"></td>
                    
                    <td>
                        <span class="c_photo"><?=strtoupper(substr($c['nom_prenom'],0,2))?></span>
                        <span class="c_nom"><?=$c['nom_prenom']?></span>
                    </td>
                    <td class="centrer">
                    <?=$c['tel_mobile']?>
                    </td>
                    <td  class="centrer">
                        <a href="?p=edit-contact&id=<?=$c['id'];?>"><i class="icon-note"></i></a>
                        <a href="?p=delect-contact&id=<?=$c['id'];?>"><i class="icon-trash"></i></a>
                        <a href="?p=fav-contact&id=<?=$c['id'];?>"><i class="icon-star"></i></a>
                    </td>
                </tr>
                
                <?php 
                }
                ?> 
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <?php
                        if($nb_page>1){
                        ?>
                        <ul class="pagination">
                   <li><i class="icon-arrow-left"></i></li>
                   <?php 
                    for ($i=1   ; $i <=$nb_page ; $i++) { 
                         $class=($page_actu==$i)?'active':'';
                        echo "<li ><a class='".$class."' href='?p=contacts&nbp=".$i."'>".$i."</a></li>";
                    }
                    ?> 
                     <li ><i class="icon-arrow-right"></i></li>
                    </ul> 
                    <?php
                    }
                    ?>
                    </td>
                </tr>
            </table>