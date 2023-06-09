<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie)
</p>

<h2>Résultat :</h2>


<?php
    include_once("./Voiture.php");

    $v1 = new Voiture("Peugeot","408");
    $ve1 = new VoitureElec("BMW","I3", 100);

    echo($v1->getInfos(). "<br />");
    echo($ve1->getInfos(). "<br />");
    
?>