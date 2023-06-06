<h1>Exercice 12</h1>

<p></p>

<h2>Résultat :</h2>


<?php
    $tableauValeurs=[true, "texte", 10, 25.369, ["valeur1","valeur2"]];

    foreach($tableauValeurs as $value){
        var_dump($value);
    }
    
?>