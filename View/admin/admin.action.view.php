<?php  require_once 'View/Partial/header.admin.php';  
require_once 'View/Partial/nav.admin.php';
genererNav($_SESSION['speudo']);

?>
<div class="container">
    <div class="row">
        <div class="col-md-8" style="position:relative;">
        <div class="container flex-center text-center pt-5 pb-5">
        <div class="row mt-5 pt-5">
          <div class="col-md-12 wow fadeIn mb-3 pt-5">
          <!-- Card -->
<div class="card card-cascade" style="color: white;">

<!-- Card image -->
<div class="view view-cascade gradient-card-header blue-gradient">
  <h2 class="card-header-title mb-3">Ajout Film</h2>
  <p class="card-header-subtitle mb-0" ></p>
</div>
<div class="card-body card-body-cascade text-center">
  <form method="POST" action="?url=traitementAjoutfilm">
<div class="form-row">
  <div class="col-md-3 mb-3 md-form">
    <label for="validationDefaultPrenom">titre</label>
    <input type="text" class="form-control " id="validationDefaultPrenom" name="titre" required>
  </div>
  <div class="col-md-3 mb-3 md-form">
    <label for="validationDefaultNumber">Réalisateur</label>
    <input type="text" class="form-control" id="validationDefaultNumber" name="realisateur" required>
  </div>
  <div class="col-md-3 mb-3 md-form">
    <label for="validationDefaultPwd">Langue</label>
    <input type="text" class="form-control" id="validationDefaultPwd" name="langue" required>
  </div>
  <div class="col-md-3 mb-3 md-form">
    <label for="validationDefaultUsernameEmail">Année </label>
    <input type="text" class="form-control" id="validationDefaultUsernameEmail" aria-describedby="inputGroupPrepend23"
       name="anneedesorti"  required>
  </div>
</div>
<div class="form-row">
<div class="col-md-12 mb-3 md-form">
   
   <div class="md-form mb-5 mt-4" >
     <textarea id="form7" class="md-textarea form-control" rows="1" name="description"></textarea>
     <label for="form7">Description</label>
   </div>
   
     </div>
</div>
<div class="form-row">
<div class="col-md-12 mb-3 md-form">
    <label for="validationDefaultUsernamephoto">Miniature </label>
    <input type="text" class="form-control" id="validationDefaultUsernameEmail" aria-describedby="inputGroupPrepend34"
       name="photo"  required>
  </div>
</div>
<div class="col-md-12 mb-3 md-form">
    <label for="validationDefaultUsernameEmail">Annonce </label>
    <input type="text" class="form-control" id="validationDefaultUsernameannonce" aria-describedby="inputGroupPrepend13"
       name="annonce"  required>
  </div>
<div class="form-row">
  <span style="color:blue;" class="align-center"> LISTE GENRES</span> 
  <hr style="background: blue!important; width:100%;">
  <?php
  $i=0;
  
   foreach ($listegenre as  $value) {
     $i++;
     echo '<div class="custom-control custom-checkbox custom-control-inline">
     <input type="checkbox" class="custom-control-input" id="defaultInline'.$i.'" name="genre'.$value->id.'" valeur="'.$value->id.'">
     <label class="custom-control-label" for="defaultInline'.$i.'"  style="color:blue;">'.$value->nomgenre.'</label>
   </div>';
   }
  ?>
</div>
<button  class="btn btn-primary btn-md" type="submit" name="ajoutfilm" ><i class="fas fa-save ">  Ajouter</i></button>
<button class="btn btn-primary btn-md" type="reset"><i class="fas fa-trash-alt"> Annuler</i></button>
</form>
</div>
</div>
          </div>
        </div>
      </div>
        </div>
    
        <div class="col-md-4">
        <div class="container flex-center text-center pb-5 mb-5 ">
        <div class="row  pb-5" style="position:fixed; margin-top:-170px;">
          <div class="col-md-12 wow fadeIn mb-3 pt-5">
<div class="card card-cascade" style="color: white;">
<div class="view view-cascade " style="background:#3f51b5;">
  <h2 class="card-header-title mb-3" style="font-weight: bolder;font-size:30px;">Ajout genre</h2>
  <p class="card-header-subtitle mb-0" ></p>
</div>
<div class="card-body card-body-cascade text-center">
  <form method="POST" action="?url=traitementGenre">
<div class="form-row">
  <div class="col-md-6 mb-3 md-form">
    <label for="validationDefaultgenre"style="color:#3f51b5; font-weight:bolder;" >Genre</label>
    <input type="text" class="form-control " id="validationDefaultgenre" name="nomGenre" required>
  </div>
</div>
</div>
<div class="form-row offset-4">
<div class="col-md-6 col-12">
<button class="btn  btn-md" style="background:#3f51b5; font-weight:bolder;" type="submit" name="ajoutGenre" ><i class="fas fa-save "> Enregistrer</i></button>
</div>
<div class="col-md-6 col-12">
<button class="btn  btn-md" type="reset" style="background:#3f51b5; font-weight:bolder;"><i class="fas fa-trash-alt">  Annuler</i></button>
</div>
</div>
</form>
 </div>
</div>
  </div>
        </div>
        </div>

    </div>
</div>

<script>
    // Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>
<?php  require_once 'View/Partial/footer.php';  ?>