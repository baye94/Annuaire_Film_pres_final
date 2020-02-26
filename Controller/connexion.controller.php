<?php

if (isset($_POST['connexion'])) {
    extract($_POST);
    $_SESSION['speudo']=$pseudo;
    $movie = new movies();
    $donnee=$movie->usersExiste($pwd,$pseudo);
    
    if ($donnee) {
        
        if($pwd=='123456' && $pseudo=='admin'){
            header('location:?url=admin');
        }else{
            header("location:?url=HOME");
        }
       
    }else
    header("location:?url=Connexion");
}

?>