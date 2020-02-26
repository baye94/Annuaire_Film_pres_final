<?php
 class Database{
     private $db;
     public function __construct($host="localhost",$db_name="annuaire_film",$user_name="root",$db_pwd="")
     {
         try {
            $this->db = new PDO("mysql:host=".$host.";dbname=".$db_name, $user_name, $db_pwd);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         } catch (Exception $e) {
            die('Erreur'.$e->getMessage());
           
         }
        
     }
     public function getdb(){
         return $this->db;
     }
     

 }


?>