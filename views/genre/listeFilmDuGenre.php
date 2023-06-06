<?php
// démare la temporisation de sortie
ob_start();

while ($detail = $genre->fetch())
    {
       
        $title= $detail["wording"];
        $film= $detail["title"];
    }  
?>
<?php var_dump($film) ?>

<h2><?=$title?></h2>

<?php
$content = ob_get_clean();
require_once "./views/template.php";
?>