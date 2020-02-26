<?php  require_once 'Partial/hearder.php';  ?>
<div class="container flex-center text-center pt-5 pb-5">
        <div class="row mt-5 pt-5">
          <div class="col-md-12 wow fadeIn mb-3 pt-5">
          <!-- Card -->
<div class="card card-cascade" style="color: white;">

<!-- Card image -->
<div class="view view-cascade gradient-card-header blue-gradient">

  <!-- Title -->
  <h2 class="card-header-title mb-3">INSCRIPTION</h2>
  <!-- Subtitle -->
  <p class="card-header-subtitle mb-0" ></p>

</div>

<!-- Card content -->
<div class="card-body card-body-cascade text-center">

  <!-- Text -->
  <form method="POST" action="?url=inscrire">
<div class="form-row">
  <div class="col-md-4 mb-3 md-form">
    <label for="validationDefaultPrenom">Prenom</label>
    <input type="text" class="form-control " id="validationDefaultPrenom" name="prenom" required>
  </div>
  <div class="col-md-4 mb-3 md-form">
    <label for="validationDefaultNom">Nom</label>
    <input type="text" class="form-control" id="validationDefaultNom" name="nom" required>
  </div>
  <div class="col-md-4 mb-3 md-form">
    <label for="validationDefaultUsernameEmail">Email</label>
    <input type="email" class="form-control" id="validationDefaultUsernameEmail" aria-describedby="inputGroupPrepend23"
       name="email"  required>
  </div>
</div>
<div class="form-row">
  <div class="col-md-6 mb-3 md-form">
    <label for="validationDefaultNumber">Pseudo</label>
    <input type="text" class="form-control" id="validationDefaultNumber" name="speudo" required>
  </div>
 
  <div class="col-md-3 mb-3 md-form">
    <label for="validationDefaultPwd">Mot de pass</label>
    <input type="password" class="form-control" id="validationDefaultPwd" name="motdepasse" required>
  </div>
  
 
  <div class="col-md-3 mb-3 md-form">
    <label for="validationDefaultConfirmation">Confirmation</label>
    <input type="password" class="form-control" id="validationDefaultConfirmation" name="confirmation" required>
  </div>
  
</div>
<button  class="btn btn-primary btn-md" type="submit" name="inscrire" ><i class="far fa-save ">  Inscrire</i></button>
<button class="btn btn-primary btn-md" type="reset"><i class="fas fa-trash-alt"> Annuler</i></button>
</form>
 

 
</div>

</div>
<!-- Card -->
         
          </div>
        </div>
      </div>
<?php  require_once 'Partial/footer.php'; ?>