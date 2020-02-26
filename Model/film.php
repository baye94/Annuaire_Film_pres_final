<?php
 class film {
      //__________________  declaration des  variable _____________________________________________
     private $titre;
     private $description;
     private $anneesorti;
     private $realisateur;
     private $langue;
     private $photo;
     private $annonce;
      //__________________Creation du constructeur qui permet d'initialiser l'objet inscription ______________________
     public function __construct($titre,$description,$anneesorti,$realisateur,$langue,$photo,$annonce)
     {
         $this-> SetTitre($titre);
         $this-> SetDescription($description);
         $this-> SetAnneeSorti($anneesorti);
         $this-> SetRealisateur($realisateur);
         $this-> SetLange($langue);
         $this-> SetPhoto($photo);
         $this-> SetAnnonce($annonce);
     }
      //__________________  Les setteurs permettent  d'intancier les variales_________________________________________
      public function SetTitre($titre){$this->titre =$titre;}
      public function SetDescription($description){$this->description = $description;}
      public function SetAnneeSorti($anneesorti){$this->anneesorti = $anneesorti;}
      public function SetRealisateur($realisateur){$this->realisateur = $realisateur;}
      public function SetLange($langue){$this->langue = $langue;}
      public function SetPhoto($photo){$this->photo = $photo;}
      public function SetAnnonce($annonce){$this->annonce= $annonce;}
       //__________________  Les getteurs permettent  d'afficher les variales___________________________________________
     public function GetTitre(){ return $this->titre ;}
     public function GetDescription(){ return $this->description ;}
     public function Getanneesorti(){ return $this->anneesorti;}
     public function GetRealisateur(){ return $this->realisateur ;}
     public function GetLangue(){ return $this->langue ;}
     public function GetPhoto(){ return $this->photo ;}
     public function GetAnnonce(){ return $this->annonce;}
 }
?>