<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'compteurWeb' . DIRECTORY_SEPARATOR . 'fonction' . DIRECTORY_SEPARATOR . 'compteur.php';
ajouter_vue();
$vues = nombre_vues();
echo $vues;
?>