<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat :</h2>


<?php

    $birth_day = new DateTime("17-01-1985");

    $now = new DateTime('now');
    $compare = $now->diff($birth_day);

    $years = $compare->y;
    $months = $compare->m;
    $days = $compare->d;
  
    echo("Age de la personne : $years ans, $months mois et $days jours.")

?> 