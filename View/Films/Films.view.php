<?php  require_once 'View/Partial/hearder.php';  ?>


 <div class="container pt-5 mt-5">
     <div class="row  mt-5">
        
         <?php
foreach ($liste as  $film) {
   echo ' <div class="col-md-4">
   <div class="card">
   <div class="card-body" >
  <a href="?url=affichefilm&film='.$film->id.'"> <img class=" img-fluid" height="400" src="'.$film->miniature.'" alt="" style="height: 350px; "></a>
   </div>
   </div>
   <div class="card-footer" style="background:white; font-weight:bolder;">'.$film->titre.'</div>
   </div>'
   ;
}

?>
        
     </div>
 </div>
 <!-- <div class="container pt-5 pb-5">
    <div class="row pt-5 pb-5">
        <div class="col-md-4">
           
            <div class=" text-center z-depth-2"style="background: #3f51b5;">
      <div class="card-body" >
      <img class=" img-fluid" height="400" src="style/img/game.jpg" alt="" style="height: 350px; ">
      </div>
    </div>
        </div>
        <div class="col-md-4">
            
            <div class="card indigo text-center z-depth-2"style="background: #3f51b5;">
      <div class="card-body" >
      <img class=" img-fluid" height="400" src="style/img/game.jpg" alt="" style="height: 350px; ">
      </div>
    </div>
        </div>
        <div class="col-md-4">
            
            <div class=" text-center z-depth-2" style="background: #3f51b5;">
      <div class="card-body" >
      <img class=" img-fluid" height="400" src="style/img/game.jpg" alt="" style="height: 350px; ">
      </div>
    </div>
        </div>

    </div>
    <div class="row pt-5 pb-5">
        <div class="col-md-4">
           
            <div class=" text-center z-depth-2" style="background: #3f51b5;">
      <div class="card-body" >
      <img class=" img-fluid" height="400" src="style/img/game.jpg" alt="" style="height: 350px; ">
      </div>
    </div>
        </div>
        <div class="col-md-4">
          
            <div class=" text-center z-depth-2" style="background: #3f51b5;">
      <div class="card-body" >
      <img class=" img-fluid" height="400" src="style/img/game.jpg" alt="" style="height: 350px; ">
      </div>
    </div>
        </div>
        <div class="col-md-4">

            <div class=" text-center z-depth-2" style="background: #3f51b5;">
      <div class="card-body" >
      <img class=" img-fluid" height="400" src="style/img/game.jpg" alt="" style="height: 350px; ">
      </div>
    </div>
        </div>
        
    </div>
 </div>
<?php  require_once 'View/Partial/footer.php'; ?>