<?php
class inscription{
     //__________________  declaration des variables___________________________________________________________
    private $nom;
    private $prenom;
    private $email;
    private $speudo;
    private $pwd;
    private $confirmation;
    
    //__________________  Creation du constructeur qui permet d'initialiser l'objet inscription ___________________________________________
    public function __construct($nom, $prenom, $email,$speudo,$pwd,$confirmation)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);
        $this->setSpeudo($speudo);
        $this->setPwd($pwd);
        $this->setConfirmation($confirmation);
        
       
    }
    //__________________  Les setteurs permettent  d'intancier les variales___________________________________________
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setSpeudo($speudo){
        $this->speudo = $speudo;
    }
    public function setPwd($pwd){
        $this->pwd = $pwd;
    }
    public function setConfirmation($confirmation){
        $this->confirmation = $confirmation;
    }
    
    //__________________  Les getteurs permettent  d'afficher les variales___________________________________________
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSpeudo(){  
        return $this->speudo;
    }
    public function getPwd(){
        return $this->pwd;
    }
    public function getConfirmation(){
        return $this->confirmation;
    }
   
    
}

?>