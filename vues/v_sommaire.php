    <!-- Division pour le sommaire -->
    <nav>
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
            
            <?php 
            if($_SESSION['type'] != "G")
                { 
                    echo '<li >';	
                    echo 'Visiteur :<br>';		 
                    echo $_SESSION['prenom']."  ".$_SESSION['nom'];
                    echo '</li>';	
                    echo '<li class="smenu">'; 
                    echo '<a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>';
                    echo '</li>';
                    echo '<li class="smenu">';
                    echo '<a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>';
                    echo '</li>';
                    echo '<li class="smenu">';
                    echo '<a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>';
                    echo '</li>';
                    echo '</ul>';
                }
                else {
                    echo '<li >';
                    echo 'Comptable :<br>'; 
                    echo $_SESSION['prenom']."  ".$_SESSION['nom'];
                    echo '</li>';
                    echo '<li class="smenu">'; 
                    echo '<a href="index.php?uc=validerFrais&action=visiteur" title="Valider fiche de frais">Valider fiche de frais</a>';
                    echo '</li>';
                    echo '<li class="smenu">';
                    echo '<a href="#">Suivre paiement fiche de frais</a>';
                    echo '</li>';
                    echo '<li class="smenu">';
                    echo '<a href="#">Créer nouveau visiteur</a>';
                    echo '</li>';
                    echo '<li class="smenu">';
                    echo '<a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>';
                    echo '</li>';
                    echo '</ul>';
                     }  
                  ?>
        
    </nav>
    