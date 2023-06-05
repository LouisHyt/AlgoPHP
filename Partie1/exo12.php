<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)</p>

<h2>Résultat :</h2>


<?php
  
  $peoples = [
    "Kazuma" => "JAP",
    "Virgile" => "ENG",
    "Maria" => "ESP",
    "Jean" => "FRA",
    "Suzanne" => "ITA",
    "Louise" => "GER",
  ];

  $langs = [
    "JAP" => "Ohayou gozaimasu",
    "ENG" => "Hello",
    "ESP" => "Hola",
    "FRA" => "Bonjour",
    "ITA" => "Buongiorno",
    "GER" => "Guten Tag",
  ];

  foreach ($peoples as $people => $language) {
    $traduction = $langs[$language];
    echo("$traduction $people ! <br />");
  }

?>