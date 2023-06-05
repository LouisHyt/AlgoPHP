<h1>Exercice 11</h1>

<p>Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir  ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat :</h2>


<?php
  
  $vehicle_brands = ["Peugeot", "Renault", "BMW", "Mercedes", "Audi", "Ferrari", "Porch"];
  echo("Il y a ". count($vehicle_brands) . " marques de voitures dans le tableau :");
  foreach ($vehicle_brands as $brand) {
    echo("<br />");
    echo("• $brand");
  }

?>