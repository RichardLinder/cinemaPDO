<?php
// démare la temporisation de sortie
ob_start();
?>
<h2>
   Liste des humans
</h2>
<p>Il a actuelement <?= $humans->rowCount()?> human au total</p>





<table class="table table-bordered">
<?php
while ($human = $humans->fetch())
{

     ?>
    <tr>
        <th><a href="index.php?action=detailHuman&id=<?=$human["id_human"];?>">test</a></th>
        <th><?= $human["first_name"];?></th>
        <th><?= $human["last_name"];?></th>
        <th><?= $human["birthdate"];?></th>
        <th><?= $human["sex"];?></th>
        <?php if ($human["id_actor"]!=null) 
        {
            ?><th> est un acteur</th> <?php
        } ?>
            <?php if ($human["id_director"]!=null) 
        {
            ?><th> est un realisateur</th> <?php
        } ?>
    </tr>
<?php
}
?>
<?php

$title= "liste des humans";
$content = ob_get_clean();
require_once "./views/template.php";
?>