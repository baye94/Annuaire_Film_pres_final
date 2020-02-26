<?php
$movie = new movies();
if(isset($_GET['idfilm'])){
    $movie->deletefilm($_GET['idfilm']);
    $movie->deleteliaisonfilm($_GET['idfilm']);
    header('location:?url=listfilm');
}

?>