<?php
// démare la temporisation de sortie
ob_start();
?>



<h2>
    ceci es une page des film
</h2>
<?php
$title= "liste des films";
$content = ob_get_clean();
require_once "./views/template.php";
?>