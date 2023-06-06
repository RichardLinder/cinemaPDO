<?php
// démare la temporisation de sortie
ob_start();
?>
<h2>
   Liste des acteurs
</h2>
<p>Il a actuelement <?= $acteurs->rowCount()?> acteur au total</p>





<table class="table table-bordered">
<?php
while ($acteur = $acteurs->fetch())
{ ?>
    <tr>
        <th><?= $acteur["first_name"];?></th>
        <th><?= $acteur["last_name"];?></th>
        <th><?= $acteur["birthdate"];?></th>
        <th><?= $acteur["sex"];?></th>
    </tr>
<?php
}
?>
<?php
$title= "liste des acteurs";
$content = ob_get_clean();
require_once "./views/template.php";
?>