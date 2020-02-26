<?php
if(isset($_POST['ajoutGenre'])){
   extract($_POST);
   $movie =new movies();
   $genre = new genre($nomGenre);
   if($genre){
       $movie->addgenre($genre);
       header("location:?url=ajoutfilm");
   }
 }

?>