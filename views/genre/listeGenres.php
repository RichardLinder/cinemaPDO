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
    <a href="index.php?action=listeFilmsDuGenre&id=<?=$genre["id_genre"]?>">
    <?=$genre["wording"];?>
    </a>
    <span>
        <form action="index.php?action=renameGender&id=<?=$genre["id_genre"]?>" method="post">
            <span> <input name="wording" type="text"  placeholder="<?=$genre["wording"];?>"></span> 
            <span><button type="submit">+</button></span>
        </form>
    </span>
    <form action="index.php?action=deletet=&id=<?=$genre["id_genre"]?>" method="post">
            <span><button type="submit">-</button></span>
        </form>
    </span>
</li>

<?php
}
?>
<hr>
    <span><form  action="index.php?action=addGenre" method="post">
        <span> <input  name="wording"  type="text"  placeholder="nouveaugenre"></span> 
        <span><button type="submit">+</button></span>

    </form></span>
</ul>
<?php
$title= "liste des genres";
$content = ob_get_clean();
require_once "./views/template.php";
?>