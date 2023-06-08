<h1>Exercice 12</h1>

<p>Soit le tableau suivant : 
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<h2>Résultat :</h2>


<?php
    $tableauValeurs=[true, "texte", 10, 25.369, ["valeur1","valeur2"]];

    foreach($tableauValeurs as $value){
        var_dump($value);
    }
    
?>