<?php
// démare la temporisation de sortie
ob_start();

if ($detail = $film->fetch())
{
    $title= $detail["title"];
    $synopsis = $detail["synopsis"];
    $Poster =$detail["poster_link"];
    $director= $detail["nameDirector"];
    $lengt= $detail["length_in_minute"];
    $SortieFR =$detail["france_release_date"];
}  
?>

<h2><?=$title?></h2>
<h3> Realisé par <?=$director?></h3>
<span>Un film de <?=$lengt?> minutes</span>
<span>  sortie en sale le <?=$SortieFR?> </span>
<div>
    <p>
    <?=$synopsis?>
    </p>
    <img src="<?=$Poster?>" alt="Poster de <?=$title?> ">
</div>

<?php 
while ( $casting= $castings->fetch()) 
{
    ?>
    <p>
        <span><?=$casting["nomActeur"];?></span>
        <span>dans le role de <?=$casting["role_name"] ?>p </span>
        <span> <a href="index.php?action=detailActor&id=<?=$casting["id_actor"];?>">Detail de l'acteur </a></span>
        
    </p>
    <?php  
}
?>
<?php
$content = ob_get_clean();
require_once "./views/template.php";
?>