<?php
include("vues/v_sommaire.php");
////Recuperation des visiteurs
//$listeVisiteur=$pdo->visiteurFicheEnCours();
////Recuperation des mois
//$listeMois=$pdo->moisFicheEnCours();

$action=$_GET['action'];
switch($action)
{
	case 'selectionnerVisiteur':
	{
            if(isset($_GET['action2']))
		{
                    $action2=$_GET['action2'];
                    switch($action2)
                    {
                        case 'FicheValide':
                            {
				//Validation fiche de frais
				$pdo->majEtatFicheFrais($_POST['Id'],$_POST['mois'],"VA");
				echo"<script> alert('La fiche de frais a été validée avec succès ! ');";
				echo"window.location = 'index.php?uc=validerFrais&action=selectionnerVisiteur'</script>";
				break;
                            }
                    }
		}
		include("vues/v_validerFrais.php");
		break;
	}
	case 'VisiteurChoisit':
	{		
            //Recuperation des frais forfait
//            $res=$pdo->getLesFraisForfait($_POST['Id'],$_POST['mois']);
            if(isset($_GET['action2']))
            {
                $action2=$_GET['action2'];
		switch($action2)
                {
                    case 'FraitHorsForfait':
			{
                            //Supression du frais hors forfait selectionner
                            $pdo->supprimerFraisHorsForfait($_POST['IdHorsForfait']);
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
                            
                            $pdo->majFraisForfait($_POST['Id'], $_POST['mois'], $lesFrais);
					
                            //Recuperation des frais forfait.
                            $res=$pdo->getLesFraisForfait($_POST['Id'],$_POST['mois']);
					
                            $MajFraitForfait=true;
                            break;
			}
		}
            }
            //Recuperation des frais hors forfaits.
//            $FraitHorsForfait=$pdo->getLesFraisHorsForfait($_POST['Id'],$_POST['mois']);
            
            break;
	}
}

include("vues/v_validerFrais.php");
//include("vues/v_validerFraisPersonneChoisi.php");
?>