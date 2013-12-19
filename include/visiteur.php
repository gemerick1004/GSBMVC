<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of visiteur
 *
 * @author laura.chantin
 */
class visiteur {
  public $id;
  public $nom;
  public $prenom;
  public $login;
  public $adresse;
  public $cp;
  public $ville;
  public $dateEmbauche;
  
  
  public function insertVisiteur($id,$nom,$prenom,$login,$adresse,$cp,$ville,$dateEmbauche )
  {
      
    $this->id = strip_tags($id) ; 
    $this->nom = strip_tags($nom) ; 
    $this->prenom = strip_tags($prenom) ; 
    $this->login = strip_tags($login) ; 
    $this->adresse = strip_tags($adresse) ; 
    $this->cp = strip_tags($cp) ; 
    $this->ville = strip_tags($ville) ; 
    $this->dateEmbauche = strip_tags($dateEmbauche) ; 
    
    
   include("include/class.pdogsb.inc.php");
    $connexion = PdoGsb::getPdoGsb();
    
    $req = $connexion->prepare('insert INTO visiteur (id,nom,prenom,login,adresse,cp,ville,dateEmbauche) VALUES (:id,:nom,:prenom,:login,:adresse,:cp,:ville,:dateEmbauche)');
 
    $req->execute(array(':id'=>$this->id,':nom'=>$this->nom,':prenom'=>$this->prenom,':login'=>$this->login,':adresse'=>$this->adresse,':cp'=>$this->cp,':ville'=>$this->ville,':dateEmbauche'=>$this->dateEmbauche));
    $req->closeCursor();
    
    }
    
}

?>
