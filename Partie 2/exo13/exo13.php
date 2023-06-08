<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule. 
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments 
suivants :
</p>

<h2>Résultat :</h2>


<?php
    include_once("./Voiture.php");

    $p1 = new Voiture("Peugeot","408", 5);
    $p2 = new Voiture("Citroën","C4", 3);
    
    echo($p1->accelerer(45));
    echo($p2->demarrer());
    echo($p1->demarrer());
    echo($p1->accelerer(50));
    echo($p2->accelerer(70));
    echo($p2->ralentir(25));
    echo($p1->accelerer(100));
    echo($p2->ralentir(45));
    echo($p2->stopper());
    echo($p1->stopper());
    echo($p1->ralentir(200));

    echo("<br />");
    echo("----- INFOS VOITURE 1 ----- <br />");
    echo($p1);
    echo("<br />");
    echo("----- INFOS VOITURE 1 ----- <br />");
    echo($p2);
    
?>