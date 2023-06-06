<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.</p>

<h2>Résultat :</h2>


<?php

    function formaterDateFr($date){
        $dateTime = new DateTime($date);
        $fmt = new IntlDateFormatter(
            'fr_FR',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE
        );
        $final = $fmt->format($dateTime);
        return $final;
    }


    echo formaterDateFr("2018-02-23")

    
?>