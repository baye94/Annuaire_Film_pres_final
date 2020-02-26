<?php
class movies{
  private $db;
//  ______________________Constructeur de la classe movies____________________________________________
    public function __construct($host="localhost",$db_name="annuaire_film",$user_name="root",$db_pwd="")
    {
        try {
           $this->db = new PDO("mysql:host=".$host.";dbname=".$db_name,$user_name, $db_pwd);
           $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
           die('Erreur'.$e->getMessage());  
        }
       
    }
    //  ______________________Getteur  de la variable $db____________________________________________
   public function getdb(){
        return $this->db;
    }
    //  ______________________fonction  qui permet d'ajouter des films dans la table film____________________________________________
//   public  function addFilm(film $films){
//      $resultatRequete=null;
//       try {
//           $requete = $this->getdb()->prepare("INSERT INTO into film values(null, 
//                                                                                     :titre,
//                                                                                     :description,
//                                                                                     :anneedesorti,
//                                                                                     :realisateur,
//                                                                                     :langue)");
//         $resultatRequete=$requete->execute([
//                ':titre'=>        $films->GetTitre(),
//                ':description'=>  $films->GetDescription(),
//                ':anneedesorti'=> $films->Getanneesorti(),
//                ':realisateur'=>  $films->GetRealisateur(),
//                ':langue'=>       $films->GetLangue()      
        
//         ]);

//       } catch (PDOException $e) {
//           $e->getMessage();
//       }
//        return $resultatRequete;
//     }
      //  ______________________Fonction qui permet d'ajouter un genre deans la base de donnee____________________________________________
    // public function addGenre(genre $genres){
    //     $resultatRequete=null;
    //     try {
    //         $requete = $this->getdb()->prepare("INSERT INTO genre VALUES(null,:nomgenre");
    //         $resultatRequete =$requete ->execute([
    //             ':nomgenre' => $genres->GetNomGenre()
    //         ]);

    //     } catch (PDOException $e) {
    //         $e->getMessage();
    //     }
    //     return $resultatRequete;
    // }
    //  ______________________Fonction qui permet d'alimenter la table liaison deans la base de donnee____________________________________________
    // public function addLiaisonFilm(liaison $liaisons){
    //     $resultatRequete=null;
    //     try {
    //         $requete = $this->getdb()->prepare("INSERT INTO liaisonfilm VALUES(:idgenre,:idfilm");
    //         $resultatRequete =$requete ->execute([
    //             ':idgenre' => $liaisons->GetIdGenre(),
    //             ':idfilm'=> $liaisons->GetIdFilm()
    //         ]);

    //     } catch (PDOException $e) {
    //         $e->getMessage();
    //     }
    //     return $resultatRequete;
    // }
     //  ______________________Fonction qui permet d'alimenter la table inscription deans la base de donnee____________________________________________
      public function addInscription(inscription $inscription){ 
        try {
            $requete = $this->getdb()->prepare("INSERT INTO users (nom,prenom,email,pseudo,motdepasse,confirmation)
                                                values(:nom, :prenom, :email, :pseudo, :pwd, :confirmation)");
            $resultatRequete = $requete->execute([
                'prenom' => $inscription->getPrenom(),
                'nom'=> $inscription->getNom(),
                'email'=> $inscription->getEmail(),
                'pseudo'=> $inscription->getSpeudo(),
                'pwd'=> $inscription->getPwd(),
                'confirmation'=>$inscription->getConfirmation()
            ]);

        } catch (PDOException $e) {
           die($e->getMessage()) ;
        }
        return $resultatRequete;
    }  
    //  ______________________Fonction qui permet de tester si le l'utilisateur existe dans la base avant dese connecter____________ 
    
    public function usersExiste($pwd,$pseudo){
        try {
            $requete = $this->getdb()->prepare("SELECT * FROM users WHERE pseudo= :pseudo and motdepasse= :motdepasse");
            $requete->execute([
                'pseudo'=> $pseudo,
                'motdepasse'=>$pwd
            ]);
           
            $tablesUsers = $requete->fetch(PDO::FETCH_OBJ);
            // var_dump($tablesUsers);
        } catch (PDOException $e) {
           die($e->getMessage());
        }
       
        return   $tablesUsers;
    }
     //  ______________________requete qui permet de recuperer tous les film avec leur genre____________ 
   public  function getAllFilm(){
         try {
            $requete = $this->getdb()->prepare("SELECT f.id, f.titre ,f.description, f.realisateur ,f.anneedesorti,f.langue, g.nomgenre from film f INNER JOIN liaisonfilm l on f.id= l.idfilm inner JOIN genre g on l.idgenre =g.id");
            $requete -> execute();
            $tablesfilm =$requete->fetchAll(PDO::FETCH_OBJ);
         } catch (PDOException $e) {
            die($e->getMessage());
         }
         return $tablesfilm;
     }
     public function getAllFilmById($id){
        try {
            $requete = $this->getdb()->prepare("SELECT f.id, f.titre ,f.description, f.realisateur ,f.anneedesorti,f.langue,f.miniature,f.annonce, g.nomgenre from film f INNER JOIN liaisonfilm l on f.id= l.idfilm inner JOIN genre g on l.idgenre =g.id  where f.id =:id ");
            $requete -> execute([
                'id'=>$id
            ]);
            $tablesfilmById =$requete->fetchAll(PDO::FETCH_OBJ);
         } catch (PDOException $e) {
            die($e->getMessage());
         }
         return $tablesfilmById;
     }
     public function allfilmsansGenre(){
        try {
            $requete = $this->getdb()->prepare("SELECT * from film");
            $requete -> execute();
            $tablesfilm =$requete->fetchAll(PDO::FETCH_OBJ);
         } catch (PDOException $e) {
            die($e->getMessage());
         }
         return $tablesfilm;
     }
   
  public   function getfilmById($id){
         try {
             $requete = $this->getdb()->prepare("SELECT * from film where id=:id");
             $requete -> execute([
                'id'=>$id
             ]);
             $film =$requete->fetch(PDO::FETCH_OBJ);
         } catch (PDOException $e) {
            die($e->getMessage());
         }
         return $film;
     }
     public function allGenre(){
        try {
            $requete = $this->getdb()->prepare("SELECT * from genre");
            $requete -> execute();
            $tablesfilm =$requete->fetchAll(PDO::FETCH_OBJ);
         } catch (PDOException $e) {
            die($e->getMessage());
         }
         return $tablesfilm;
     }
     public function addfilm(film $film){
         try {
             $requete =$this->getdb()->prepare("INSERT INTO film values(null,:titre,:description,:anneedesorti,:realisateur,:langue,:miniature,:annonce)");
         $resultatRequete=$requete ->execute([
                   'titre'         =>$film->GetTitre(),
                   'description'   =>$film->GetDescription(),
                   'anneedesorti'  =>$film->Getanneesorti(),
                   'realisateur'   =>$film->GetRealisateur(),
                   'langue'        =>$film->GetLangue(),
                   'miniature'     =>$film->GetPhoto(),
                   'annonce'       =>$film->GetAnnonce()
             ]);
         } catch (PDOException $e) {
            die($e->getMessage());
         }
         $return=$this-> getdb()->lastInsertId();
         return (int) $return;
     }
     public function addgenre(genre $genre){
        try {
            $requete =$this->getdb()->prepare("INSERT INTO genre values(null,:nomgenre)");
        $resultatRequete=$requete ->execute([
                  'nomgenre'         =>$genre->GetNomGenre()
                  
            ]);
        } catch (PDOException $e) {
           die($e->getMessage());
        }
        return $resultatRequete;
     }
     public function addliaison(liaison $liaisons){
         try {
            $requete =$this->getdb()->prepare("INSERT INTO liaisonfilm values(:idfilm,:idgenre)");
            $resultatRequete=$requete ->execute([
                      'idfilm'         =>$liaisons->GetIdFilm(),
                      'idgenre'       =>$liaisons->GetIdGenre()
                     
                ]);
         } catch (PDOException $e) {
            die($e->getMessage());
         }
         return $resultatRequete;
     }
     public  function deletefilm($id){
         try {
             $requete =$this->getdb()->prepare("DELETE  FROM film where id = :id");
             $resultatRequete= $requete->execute([
                 'id' =>$id
             ]);

         } catch (PDOException $e) {
             die($e->getMessage());
         }
         return $resultatRequete;
     }
     public function deleteliaisonfilm($id){
         try {
             $requete =$this->getdb()->prepare("DELETE  from liaisonfilm where idfilm=?");
             $resultatRequete =$requete->execute([$id]);
         } catch (PDOException $e) {
            die($e->getMessage());
         }
         return $resultatRequete;
     }
    

    public function updateFilm($id){
        try {
            $requete = $this->getdb()->prepare("UPDATE  from film set   where id=:id");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
 public   function CreateFile($nomFichier){
        fopen('style/miniatures/'.$nomFichier,'a+');
      }
      public   function CreateFilev($nomFichier){
        fopen('style/annonce/'.$nomFichier,'a+');
      }
    
 }

?>