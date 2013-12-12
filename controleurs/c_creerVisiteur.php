
<?php
include ("vues/v_sommaire.php");
include ("vues/v_ajoutVisiteur.php");
$action = $_REQUEST['action'];
switch($action){
	case 'creerVisit':{
            
            if($_POST['id']="")
            {
                ajouterErreur ("Tous les champs doivent être remplis");
            
            }
            
            break;
	}
}
?>
