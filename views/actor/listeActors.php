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
        <th><?= $acteur["first_name"]?></th>
        <th><?= $acteur["last_name"]?></th>
        <th><?= $acteur["birthdate"]?></th>
        <th><?= $acteur["sex"]?></th>
        <th><a href="index.php?action=detailActor&id=<?=$acteur["id_actor"];?>">Detail de l'acteur </a></th>
    </tr>
<?php
}
?>
</table>
<a href="index.php?action=listeHuman"> Verifier liste des persones</a>

<?php
$cSS ="main.css";
$title= "liste des acteurs";
$content = ob_get_clean();
require_once "./views/template.php";
?>