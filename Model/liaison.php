<?php
 class liaison{
      //__________________ declaration des  variable _____________________________________________
     private $idGenre;
     private $idFilm;
    
      //__________________Creation du constructeur qui permet d'initialiser l'objet inscription ______________________
     public function __construct($_idFilm,$_idGenre)
     {
         $this-> SetIdFilm($_idFilm);
         $this-> SetIdGenre($_idGenre);
         
     }
      //__________________  Les setteurs permettent  d'intancier les variales_________________________________________
      public function SetIdFilm($id){$this->idFilm = $id;}
      public function SetIdGenre($id){$this->idGenre = $id;}
     //__________________  Les getteurs permettent  d'afficher les variales___________________________________________
     public function GetIdFilm(){ return $this->idFilm;}
     public function GetIdGenre(){ return $this->idGenre;}
}
?>