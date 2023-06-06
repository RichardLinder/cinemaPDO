<?php
// démare la temporisation de sortie
ob_start();
?>



<h2>
    ceci es une page des realisateur
</h2>

<?php
while ($director = $directors->fetch())
{ ?>
   
    <?= $director["first_name"]; ?>
    <br>

    <?= $director["last_name"]; ?>

    <br>
    
    <?= $director["birthdate"]; ?>
    <br>

    <?= $director["sex"]; ?>
    <hr>

<?php
}
?>



<?php
$title= "liste des realisateur";
$content = ob_get_clean();
require_once "./views/template.php";
?>