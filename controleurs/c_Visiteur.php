<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
//$idGestionnaire = $_SESSION['idGestionnaire'];
switch($action){
    case 'selectionnerVisiteur':{
                $lesVisiteur=$pdo->getLesVisiteurDisponibles();
		// Afin de sélectionner par défaut le dernier utilisateru dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les visiteur étant triés décroissants
//		$lesCles = array_keys( $idGestionnaire );
		include("vues/v_listeVisiteur.php");
		break;
        }
        case 'voirEtatVisiteur':{
		$leVisiteur = $_REQUEST['lstVisiteur']; 
                $leMois = $_REQUEST['lstMois'];
		$lesVisiteur=$pdo->getLesVisiteurDisponibles();
                $leMois = $pdo->getFicheFraisVisiteur($lesVisiteur, $leMois);
		$VisiteurASelectionner = $leVisiteur;
		include("vues/v_listeVisiteur.php");
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($leVisiteur,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($leVisiteur,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($leVisiteur,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("vues/v_etatFrais.php");
	}
}
?>
