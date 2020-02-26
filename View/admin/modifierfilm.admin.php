<?php  require_once 'View/Partial/header.admin.php';
require_once 'View/Partial/nav.admin.php';
genererNav($_SESSION['speudo']);
$movie = new movies();
$film = $movie->getAllFilmById($_GET['idfilm']);
?>
<?php
foreach ($film as  $value)
$_SESSION['titre']=$value->titre;
$_SESSION['description']=$value->description;
$_SESSION['realisateur']=$value->realisateur;
$_SESSION['annee']=$value->anneedesorti;
$_SESSION['langue']=$value->langue;
$_SESSION['miniature']=$value->miniature;
$_SESSION['annonce']=$value->annonce;
$_SESSION['genre']=$value->nomgenre;
?>
<div class="container flex-center">
    <div class="row">
        <div class="col-md-12" >
        <div class="container flex-center text-center pt-5 pb-5">
        <div class="row mt-5 pt-5">
          <div class="col-md-12 wow fadeIn mb-3 pt-5">
          <!-- Card -->
<div class="card card-cascade" style="color: white;">

<!-- Card image -->
<div class="view view-cascade gradient-card-header blue-gradient">
  <h2 class="card-header-title mb-3">Modification</h2>
  <p class="card-header-subtitle mb-0" ></p>
</div>
<div class="card-body card-body-cascade text-center">
  <form method="POST" action="?url=traitementAjoutfilm">
<div class="form-row">
  <div class="col-md-3 mb-3 md-form">
    <label for="validationDefaultPrenom">titre</label>
    <input type="text" class="form-control " id="validationDefaultPrenom" name="titre" value="<?php echo $_SESSION['titre'];?>" required>
  </div>
  <div class="col-md-3 mb-3 md-form">
    <label for="validationDefaultNumber">Réalisateur</label>
       

    <input type="text" class="form-control" id="validationDefaultNumber" name="realisateur" value="<?php echo $_SESSION['realisateur']; ?>" required>
  </div>
  <div class="col-md-3 mb-3 md-form">
    <label for="validationDefaultPwd">Langue</label>
    <input type="text" class="form-control" id="validationDefaultPwd" name="langue" value="<?php echo $_SESSION['genre']; ?>" required>
  </div>
  <div class="col-md-3 mb-3 md-form">
    <label for="validationDefaultUsernameEmail">Année </label>
    <input type="text" class="form-control" id="validationDefaultUsernameEmail" aria-describedby="inputGroupPrepend23"
       name="anneedesorti" value="<?php echo $_SESSION['annee']; ?>"  required>
  </div>
</div>
<div class="form-row">
<div class="col-md-12 mb-3 md-form">
   
   <div class="md-form mb-5 mt-4" >
     <textarea id="form7" class="md-textarea form-control" rows="1" cols="5" name="description"  value="<?php echo $_SESSION['description']; ?>"  style="width: 10cm!important;"></textarea>
     <label for="form7">Description</label>
   </div>
   
     </div>
   
</div>
<div class="form-row">
  <div class="col-md-12 mb-3 md-form">
    <p style="color: red;" class="text-left blue-text">Miniature</p>
    <input type="file" class="form-control" id="validationDefaultNumber" name="photo"   value="<?php echo $_SESSION['miniature']; ?>"  required>
  </div> 
</div>
<div class="form-row">
  <div class="col-md-12 mb-3 md-form">
  <p style="color: red;" class="text-left blue-text">Bande Annonce</p>
    <input type="file" class="form-control" id="validationDefaultPwd" name="annonce"  value="<?php echo $_SESSION['annonce']; ?>" required>
  </div>
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
     <label class="custom-control-label" for="defaultInline'.$i.'"  style="color:red;">'.$value->nomgenre.'</label>
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
    </div>
</div>
<?php  require_once 'View/Partial/footer.php';  ?>


