<?php

include("include/class.pdogsb.inc.php");
if(!empty($_POST))
    
{
    extract($_POST);    
    $visiteur = new visiteur();
    $visiteur->insertVisiteur($id, $nom, $prenom, $login,$adresse, $cp, $ville,$dateEmbauche);
}
    
?>

<div id="contenu">
      <h2>Ajouter Visiteur</h2>

<div class="corpsForm">
<form method="POST" action="index.php?uc=creerVisiteur&action=creerVisit">
   
     <input id="file" type="file" /><br><br>
			
       <label for="id">Id : </label>
       <input type="text" id="id" readonly="true" size="30" maxlength="45"><br>
 	
        <label for="nom">Nom : </label>
        <input type="text"  id="nom" readonly="true" size="30" maxlength="45"><br>
        
        <label for="prenom">Prénom : </label>
        <input type="text"  id="prenom" readonly="true" size="30" maxlength="45"><br>
        
        <label for="adresse">Adresse : </label>
        <input type="text"  id="adresse" readonly="true" size="30" maxlength="45"><br>
        
        <label for="cp">Code Postal : </label>
        <input type="text"  id="cp" readonly="true" size="30" maxlength="45"><br>
  
        <label for="ville">Ville : </label>
        <input type="text"  id="ville" readonly="true" size="30" maxlength="45"><br>
        
        <label for="dateEmb">Date Embauche : </label>
        <input type="text"  id="dateEmb" readonly="true" size="30" maxlength="45"><br>
        
        <label for="fonction">Fonction : </label>
        <input type="text"  id="fonction" readonly="true" size="30" maxlength="45"><br><br>
        
        
        
         <input type="submit" value="Valider" name="valider"><br>
         <input type="reset" value="Annuler" name="annuler"> 
  
</form>
</div>     
</div>  

<script type="text/javascript">
  
var fileInput = document.querySelector('#file');
 
fileInput.onchange = function() {
 
    var reader = new FileReader();
 
    reader.onload = function() {
        
		var tabnom = reader.result.split(';');
		var id = tabnom[0];
		var nom = tabnom[1];
                var prenom = tabnom[2];
                var adresse = tabnom[3];
                var cp = tabnom[4];
                var ville = tabnom[5];
                var dateEmb = tabnom[6];
                var fonction = tabnom[7];
		document.getElementById('id').value = id;
		document.getElementById('nom').value = nom;
                document.getElementById('prenom').value = prenom;
                document.getElementById('adresse').value = adresse;
                document.getElementById('cp').value = cp;
                document.getElementById('ville').value = ville;
                document.getElementById('dateEmb').value = dateEmb;
                document.getElementById('fonction').value = fonction;
    };
 
    reader.readAsText(fileInput.files[0]);
	if(reader.readyState == 1) {
  // La lecture est fini
	
    }
 
};  

</script>