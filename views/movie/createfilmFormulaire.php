<?php
// démare la temporisation de sortie
ob_start();
?>
<!-- 
form
titre (obligatoire) text 
date de sortie date
durée en min 


 -->


 <form class="row g-3 needs-validation" action="index.php?action=createFilm" method="post">
  <div class="col-md-4">
    <div class="form-label">
    <!-- <label for="validationCustom01" class="form-label">Titre</label> -->
    <input name="titre" type="text" class="form-control" id="validationCustom01"  required>
    
    Looks good!
    
    </div>
        <label for="date">date de sortie</label>
        <input name="date" type="date" id="date">
        <input name="synopsis" id="validationTextarea" placeholder="synopsis" >
        <label for="dure"> La durée du film en min</label>
        <input type="number" name="duree" id="idDure">
        <label for="posterUrl"> Lien vers l'affiche du film</label>
        <input type="url" name="posterUrl" id="idPoster">
        <label for="rating"> rating</label>
        <input type="number" name="rating" id="idRating">
        <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </div>

</form>

<?php
$title= "liste des films";
$content = ob_get_clean();
require_once "./views/template.php";
?>