<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.</p>

<h2>Résultat :</h2>


<?php

    function convertirMajRouge($text){

        return '<p style="color: red">'.strtoupper($text).'</p>';

    }

    echo(convertirMajRouge("salut les amis, vous allez bien ?"));

?> 