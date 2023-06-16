<?php
// démare la temporisation de sortie
ob_start();
while ($detail = $human->fetch())
{
    $title = $detail["title"];
}  






$content = ob_get_clean();
require_once "./views/template.php";
?>