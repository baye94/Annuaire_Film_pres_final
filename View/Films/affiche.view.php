<?php  require_once 'View/Partial/hearder.php';  
$movie = new movies();
$film=$movie->getAllFilmById($_GET['film']);
$fil2 =$movie->getfilmById($_GET['film']);
?>
<div class="container-fluid mt-5 pt-5">
   <div class="card " >
     <div class="card-body">
    <div class="row">
       
            <div class="col-md-8">
              <div class="card " style="width: 40rem;" >
                <div class="card-body">
                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Realisateur</th>
      <th scope="col">Langue</th>
      <th scope="col">Genre</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
    <!-- <td col="4" row="3"> <img src="'.$value->miniature.'" width="90" height="90" ralt=""></td> -->
      <?php
      
      foreach ($film as $value) {
       
       echo ' <td>'.$value->titre.'</td>
       <td>'.$value->description.'</td>
       <td>'.$value->anneedesorti.'</td>
       <td>'.$value->realisateur.'</td>
       <td>'.$value->langue.'</td>
       <td>'.$value->nomgenre.'</td>
       
      
       
       ';
       $_SESSION['image']=$value->miniature;
       $_SESSION['annonce']=$value->annonce;
      }
     
     
    ?>
   
    </tr>
  
  </tbody>
</table>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4">
         <?php
         echo  '<img src="'. $_SESSION['image'].'" width="300" height="200" ralt="">';
         ?>
          </div>
        </div>
        
         <div class="row">
           <div class="col-12">
            <?php echo' <video src="'. $_SESSION['annonce'].'"></video>';  ?>
           </div>
         </div>
       
    </div>
    </div>
</div>

<?php



?>
<?php  require_once 'View/Partial/footer.php';  ?>