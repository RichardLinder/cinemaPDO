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

        <th><?= $human["first_name"];?></th>
        <th><?= $human["last_name"];?></th>
        <th><?= $human["birthdate"];?></th>
        <th><?= $human["sex"];?></th>
        <th><?=$human["id_human"];?></th>
    </tr>
<?php
}
?>
<?php

$title= "liste des humans";
$content = ob_get_clean();
require_once "./views/template.php";
?>