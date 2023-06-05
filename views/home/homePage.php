<?php
// démare la temporisation de sortie
ob_start();
?>



<h2>
    ceci es une page d'accueil
</h2>
<?php
$title= "Aurevoir Cinema";
$content = ob_get_clean();
require_once "./views/template.php";
?>