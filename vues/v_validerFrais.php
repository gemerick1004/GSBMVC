<div id="contenu">
    <h2>Valider les fiches de frais des visiteurs médicaux</h2>
    <h3><legend>Visiteur à sélectionner :</legend></h3>
	<div class="corpsForm">
            <form method="POST" <!--action="c_validerFrais.php?action=AfficherFiche"-->><br/>
                <label for="visiteur">Visiteur :</label>
                <select name="Id">
                    <?php
                    mysql_connect('localhost', 'root', '') or die(mysql_error());
                    // mysql_connect($host, $username, $password) 
                    mysql_select_db('gsb_frais_new_n2') or die(mysql_error());

                    $result = mysql_query("select nom from visiteur ");
                    while($rowV = mysql_fetch_assoc($result)){
                    echo '<option value="'.$rowV['id'].'">'.$rowV['nom'].'</option>';
                    }
                    ?>   
                </select>

                <br/>
                <br/>

                <label for="mois">Mois :</label>

                    <select name='mois' id="mois">
                     <?php
                        
mysql_connect('localhost', 'root', '') or die(mysql_error());
                    // mysql_connect($host, $username, $password) 
                    mysql_select_db('gsb_frais_new_n2') or die(mysql_error());

                        $resultM = mysql_query('select DISTINCT mois from fichefrais');
                        while($row = mysql_fetch_assoc($resultM)){
                        echo '<option value="'.$row['id'].'">'.$row['mois'].'</option>';
                        }
                        ?> 
                    </select>
                <br/>
                <br />
                <input type="Submit" value="Valider">
            </form>
        </div>
        <br/>
        
</div>
    