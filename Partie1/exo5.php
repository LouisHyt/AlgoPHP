<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat :</h2>


<?php

$francs = 100;
$taux = 6.5596;
$euros = $francs / $taux;
print_r("Montant en francs : $francs <br />");
print_r("Montant en Euros : " . round($euros, 2));


?>