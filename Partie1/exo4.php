<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat :</h2>


<?php
$sentence = "Engage le jeu que je le gagne";
$sentenceFormat = preg_replace("/[^A-Za-z0-9]/i", "", strtolower($sentence));
$sentenceReverse = strrev($sentenceFormat);

if ($sentenceFormat == $sentenceReverse) {
    print_r("La phrase \"$sentence\" est palindrome");
} else {
    print_r("La phrase \"$sentence\" n'est pas palindrome");
}


?>