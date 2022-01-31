<?php 
$date = "2022-01-30";
$date2 = "2020-08-14";

$d = new DateTime($date);
$d2 = new DateTime($date2);
$diff = $d->diff($d2,true);
echo "il y a {$diff->y} années, mois {$diff->m} et {$diff->d} jour de différence ";
echo "<pre>";
var_dump($d);
echo '</pre>';

?>