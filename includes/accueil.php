<table>
                <tr>
                    <th>#</th>
                    <th >
                        <form action="index.php" class="tform" method="GET">
                            <input type="search">
                        <button type="submit">Rechercher</button>
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
                for ($i=0; $i <=10 ; $i++) { 
                ?>                 
                <tr>
                    <td><input type="checkbox" name="contact_check" value="1"></td>
                    
                    <td>
                        <span class="c_photo"></span>
                        <span class="c_nom">MONHOSSOU Caleb</span>
                    </td>
                    <td>
                        +229 97 34 56 23
                    </td>
                    <td>
                        <a href="#">Modifier</a>
                        <a href="#">Supprimer</a>
                        <a href="#">favoris</a>
                    </td>
                </tr>
                
                <?php 
                }
                ?> 
            </table>