<?php
// démare la temporisation de sortie
ob_start();
?>

<h2>
    Liste des films
</h2>

<p>
    Il a actuelement <?= $films->rowCount()?> dans la base de donné
</p>



<table class="table table-bordered">
<?php 

while ($film = $films->fetch())
{ ?> 
<tr>
    <th><?=$film["id_film"];?></th>
    <th><a href="index.php?action=detailFilm&id=<?=$film["id_film"];?>"><?= $film["title"];?>
 </a></th>
</tr>
<?php
}
?>
</table>


<a href="index.php?action=createfilmFormulaire">ajout film</a>
<?php


$title= "liste des films";
$content = ob_get_clean();
require_once "./views/template.php";
?>