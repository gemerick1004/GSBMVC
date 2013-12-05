 <div id="contenu">
      <h2>Les fiches de frais</h2>
      <h3>Visiteur à sélectionner : </h3>
      <form action="index.php?uc=Visiteur&action=voirEtatVisiteur" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstVisiteur" accesskey="n">Visiteur : </label>
        <select id="lstVisiteur" name="lstVisiteur">
            <?php
			foreach ($lesVisiteur as $unVisiteur)
			{
			    $visiteur = $unVisiteur['nom'];
            ?>
				<option value="<?php echo $visiteur ?>"><?php echo  $visiteur ?> </option>
                    <?php 
                        }
                    ?>    
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>