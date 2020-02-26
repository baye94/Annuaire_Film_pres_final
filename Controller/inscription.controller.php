<?php
  if(isset($_POST['inscrire'])){ 
  
   extract($_POST) ;
    $movie = new movies(); 
  $users = new inscription( $nom,$prenom,$email,$speudo,$motdepasse,$confirmation);  
  if ($movie->addInscription($users)) {
     header('location:?url=Connexion');
  }
 
}
?>