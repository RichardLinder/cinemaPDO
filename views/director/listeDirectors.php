<?php
// démare la temporisation de sortie
ob_start();
?>
<h2>Liste des realisateur</h2>

<p>Il a actuelement <?= $directors->rowCount()?> réalisateur au total</p>

<table class="table table-bordered">

<?php
// show the result of the sql request to fetch all director
while ($director = $directors->fetch())
{ ?>
    <tr>
        <th><?=$director["first_name"];?></th> 
        <th><?=$director["last_name"];?></th> 
        <th><?=$director["birthdate"];?></th> 
        <th><?=$director["sex"];?></th>
        <th><a href="index.php?action=detailDirector&id=<?=$director["id_director"]?>">Detail du réalisateur </a></th>
    </tr>
<?php
}
?>
<?php
$title= "liste des realisateur";
$content = ob_get_clean();
require_once "./views/template.php";
?>