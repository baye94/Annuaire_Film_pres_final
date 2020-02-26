<?php  require_once 'Partial/hearder.php';  ?>
<div class="container flex-center text-center pt-5 pb-5">
        <div class="row mt-5 pt-5">
          <div class="col-md-12 wow fadeIn mb-3 pt-5">
          <!-- Card -->
<div class="card card-cascade" style="color: white;">

<!-- Card image -->
<div class="view view-cascade " style="background:#3f51b5;">

  <!-- Title -->
  <h2 class="card-header-title mb-3" style="font-weight: bolder; ">Connexion</h2>
  <!-- Subtitle -->
  <p class="card-header-subtitle mb-0" ></p>

</div>

<!-- Card content -->
<div class="card-body card-body-cascade text-center">

  <!-- Text -->
  <form method="POST" action="?url=connecter">
<div class="form-row">
  <div class="col-md-6 mb-3 md-form">
    <label for="validationDefaultPrenom"style="color:#3f51b5; font-weight:bolder;" >Pseudo</label>
    <input type="text" class="form-control " id="validationDefaultPrenom" name="pseudo" required>
  </div>
 
 <div class="col-md-6 mb-3 md-form">
    <label for="validationDefaultNom"  style="color:#3f51b5; font-weight:bolder;">Mot de passe</label>
    <input type="password" class="form-control" id="validationDefaultNom" name="pwd" required>
  </div>
 
  
</div>

</div>
<div class="form-row offset-4">
<div class="col-md-6 col-12">
<button class="btn  btn-md" style="background:#3f51b5; font-weight:bolder;" type="submit" name="connexion" ><i class="fas fa-save ">Connexion</i></button>
</div>
<div class="col-md-6 col-12">
<button class="btn  btn-md" type="reset" style="background:#3f51b5; font-weight:bolder;"><i class="fas fa-trash-alt">  Annuler</i></button>
</div>
</div>
</form>
 </div>
</div>
<!-- Card -->
         
          </div>
        </div>

<?php  require_once 'Partial/footer.php'; ?>