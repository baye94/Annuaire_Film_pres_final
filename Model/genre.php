<?php
 class genre{
      //__________________  declaration des  variable _____________________________________________
     private $nom;
    
      //__________________Creation du constructeur qui permet d'initialiser l'objet inscription ______________________
     public function __construct($nom)
     {
         $this-> SetNomGenre($nom);
         
     }
      //__________________  Les setteurs permettent  d'intancier les variales_________________________________________
      public function SetNomGenre($nom){$this->nom = $nom;}
     
     //__________________  Les getteurs permettent  d'afficher les variales___________________________________________
     public function GetNomGenre(){ return $this->nom ;}


 }
?>