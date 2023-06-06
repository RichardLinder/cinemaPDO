<?php
// démare la temporisation de sortie
ob_start();
?>
<?= $acteurs->rowCount()?>


<h2>
    ceci es une page des acteurs
</h2>
<?php
while ($acteur = $acteurs->fetch())
{ ?>
   
    <?= $acteur["first_name"]; ?>
    <br>

    <?= $acteur["last_name"]; ?>

    <br>
    
    <?= $acteur["birthdate"]; ?>
    <br>

    <?= $acteur["sex"]; ?>
    <hr>

<?php
}
?>
<?php
$title= "liste des acteurs";
$content = ob_get_clean();
require_once "./views/template.php";
?>