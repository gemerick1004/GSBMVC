

<div id="contenu">
      <h2>Ajouter Visiteur</h2>


<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
   
    
			
       <label for="id">Id : </label>
       <input type="text" name="id" readonly="true" size="30" maxlength="45"><br>
 	
        <label for="nom">Nom : </label>
        <input type="text"  name="nom" readonly="true" size="30" maxlength="45"><br>
        
        <label for="prenom">Prénom : </label>
        <input type="text"  name="prenom" readonly="true" size="30" maxlength="45"><br>
        
        <label for="adresse">Adresse : </label>
        <input type="text"  name="adresse" readonly="true" size="30" maxlength="45"><br>
        
        <label for="cp">Code Postal : </label>
        <input type="text"  name="cp" readonly="true" size="30" maxlength="45"><br>
  
        <label for="ville">Ville : </label>
        <input type="text"  name="nom" readonly="true" size="30" maxlength="45"><br>
        
        <label for="dateEmb">Date Embauche : </label>
        <input type="text"  name="dateEmb" readonly="true" size="30" maxlength="45"><br>
        
        <label for="fonction">Fonction : </label>
        <input type="text"  name="fonction" readonly="true" size="30" maxlength="45"><br>
        
         <input id="test" type="file" /><br>
        
         <input type="submit" value="Valider" name="valider"><br>
         <input type="reset" value="Annuler" name="annuler"> 
  
</form>
      
     

</div