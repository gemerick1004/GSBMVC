<?php
include("vues/v_sommaire.php");
//$ficheVisiteur=$pdo->visiteurFicheEnCours();
//$mois=$pdo->moisFicheEnCours();
$action = $_REQUEST['action'];
switch($action)
{
	case 'Visiteur':
        {
            if(isset($_GET['action_bis']))
		{
                    $action_bis=$_GET['action_bis'];
                    switch($action_bis)
                    {
                        case 'FicheValide':
                            {
				//Validation fiche de frais
				$pdo->majEtatFicheFrais($_POST['id'],$_POST['mois'],"VA");
				echo"<script> alert('La fiche de frais est validée');";
				echo"window.location = 'index.php?uc=validerFrais&action=selectionnerVisiteur'</script>";
				break;
                            }
                    }
                }
        }
        case '';
            {		
            //Recuperation des frais forfait
            $res=$pdo->getLesFraisForfait($_POST['id'],$_POST['mois']);
            if(isset($_GET['action_bis']))
            {
                $action_bis=$_GET['action_bis'];
		switch($action_bis)
                {
                    case 'FraitHorsForfait':
			{
                            //Supression du frais hors forfait selectionner
                            $pdo->supprimerFraisHorsForfait($_POST['idHorsForfait']);
                            $MajFraitHorsForfait=true;
                            break;
			}
                        
                    case 'FraitForfait':
			{
                            //Mise a jour des frais forfait
                            $lesFrais =array();
                            foreach($res as $tab)
                            {
                                $lesFrais[$tab['idfrais']]=$_POST[$tab['idfrais']];
                            }
                            
                            $pdo->majFraisForfait($_POST['id'], $_POST['mois'], $lesFrais);
					
                            //Recuperation des frais forfait.
                            $res=$pdo->getLesFraisForfait($_POST['id'],$_POST['mois']);
					
                            $MajFraitForfait=true;
                            break;
			}
		}
            }
            //Recuperation des frais hors forfaits.
            $FraitHorsForfait=$pdo->getLesFraisHorsForfait($_POST['id'],$_POST['mois']);
            
            include("vues/v_validerFrais.php");
            include("vues/v_validerFraisChoisit.php");
            break;
	}
}
?>


﻿<div id="contenu">
    <h2>Valider les fiches de frais</h2>
    <h3><legend>Visiteur sélectionner :</legend></h3>
	<div class="corpsForm">
            <form method="POST" action="index.php?uc=validerFrais&action=VisiteurChoisit"><br/>
                <label for="visiteur">Visiteur :</label>
                <select name="id">
                    <?php
                    //Affichage des visiteurs
                    while($visiteur=$listeVisiteur->fetch())
                    {
                        //On Selectionne le visiteurs en cours
                        if(isset($_POST['id']) && $_POST['id']==$visiteur['id'])
                        {
                    ?>
                           <option label='Visiteur' Selected value='<?php echo $visiteur['id']; ?>'><?php echo $visiteur['prenom']." ".$visiteur['nom'] ."  |".$visiteur['id'];?>
                    <?php

                        }
                        else
                        {
                    ?>      <option label='Visiteur' value='<?php echo $visiteur['id']; ?>'><?php echo $visiteur['prenom']." ".$visiteur['nom'] ."  |".$visiteur['id']; ?></option><?php
                        }
                        
                    } 
                    ?>
                </select>

                <br/>
                <br/>

                <label for="mois">Mois :</label>

                <select name='mois' id="mois">
                <?php	
                //Affichage des mois
                    while($mois=$listeMois->fetch())
                        {
                            //On Selectionne le mois en cours
                            if(isset($_POST['mois']) && $_POST['mois']==$mois['mois'])
                            {
                ?>              <option label='MoisVisiteurs' Selected value='<?php echo $mois['mois']; ?>'><?php echo GetLibelleMois($mois['mois'])." ".substr($mois['mois'],0,4); ?></option>
                <?php    
                            }
                            else
                            {
                ?>              <option label='MoisVisiteurs' value='<?php echo $mois['mois']; ?>'><?php echo GetLibelleMois($mois['mois'])." ".substr($mois['mois'],0,4); ?></option>
                <?php
                            }
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
    
