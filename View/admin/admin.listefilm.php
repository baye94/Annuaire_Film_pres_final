<?php  require_once 'View/Partial/header.admin.php';  
  require_once 'View/Partial/nav.admin.php';
  genererNav($_SESSION['speudo']);
?>
<div class="container pt-5 mt-5">
    <div class="card  mt-5">
        <div class="card-body">
            <!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4" style="background: #3f51b5!important; color:white;">Liste des films</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="?url=ajoutfilm" class="text-success" style="color: #3f51b5!important; "><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Titre</th>
            <th class="text-center">Description</th>
            <th class="text-center">Date</th>
            <th class="text-center">Realisateur</th>
            <th class="text-center">Langue</th>
            <th class="text-center">Genre</th>
            <th class="text-center">Modifier</th>
            <th class="text-center">Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <?php
           foreach ($liste as  $value) {
              echo ' <tr>
              <td class="pt-3-half" >'.$value->id.'</td>
              <td class="pt-3-half" >'.$value->titre.'</td>
              <td class="pt-3-half" >'.$value->description.'</td>
              <td class="pt-3-half" >'.$value->anneedesorti.'</td>
              <td class="pt-3-half">'.$value->realisateur.'</td>
              <td class="pt-3-half">'.$value->langue.'</td>
              <td class="pt-3-half">'.$value->nomgenre.'</td>

              
              <td class="pt-3-half">
               
                <span class="table-down"><a href="?url=modifier&idfilm='.$value->id.' "  class="indigo-text"><i class="fas fa-edit" style="font-size:25px!important;"></i></a></span>
              </td>
              <td>
                <span class="table-remove"><a href="?url=supprimer&idfilm='.$value->id.'" class="indigo-text"><i class="fas fa-trash-alt" style="font-size:25px!important;"></i></a></span>
              </td>
            </tr>';
           }
          ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->
        </div>
    </div>
</div>


<?php  require_once 'View/Partial/footer.php';  ?>