<?php
// démare la temporisation de sortie
ob_start();
?>



<h2>
    ceci es une page des genres
</h2>


<ul>
<?php 
while ($genre = $genres->fetch())
{ ?>
<li> 
    <a href="index.php?action=listeFilmDuGenre&id=<?=$genre["id_genre"]?>">
    <?=$genre["wording"];?>
    </a>
</li>
<?php
}
?>
</ul>
<?php
$title= "liste des genres";
$content = ob_get_clean();
require_once "./views/template.php";
?>