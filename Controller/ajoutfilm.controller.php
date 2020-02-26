<?php
if(isset($_POST['ajoutfilm'])){
   extract($_POST);
   $movie = new movies(); 
   $listegenre =$movie->allGenre();
   
   $film = new film($titre,$description,$anneedesorti,$realisateur,$langue,$photo,$annonce);
   $lastfilmid = $movie->addfilm($film);
  
   if ($lastfilmid) {
     
      foreach ($listegenre as  $value) {
         if(isset($_POST['genre'.$value->id])){
            $lier= new liaison($lastfilmid ,$value->id);
            $movie->addliaison( $lier);
           
         }
         
       }
       header('location:?url=listefilm');
   }else{
      header('location:?url=ajoutfilm');
   }
     
  
}



?>