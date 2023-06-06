<?php
// démare la temporisation de sortie
ob_start();
?>



<?= $films->rowCount()?>



<?php 

while ($film = $films->fetch())
{ 
   
    echo $film["id_film"]; ?>
    <br>

    <?= $film["title"]; ?>
    <hr>

<?php
}
?>
<h2>
    ceci es une page des film
</h2>
<?php
$title= "liste des films";
$content = ob_get_clean();
require_once "./views/template.php";
?>