<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre </p>

<h2>Résultat :</h2>


<?php

    //Solution 1
    function get_table($nb){
        print_r("Table de $nb : <br />");
        for($i = 1; $i <= 10; $i++){
            print_r("$i x $nb = ". $i * $nb . "<br />");
        }
    }
    get_table_alternative(4);

    //Solution 2
    function get_table_alternative($nb){
        print_r("Table de $nb : <br />");
        $count = 1;
        while($count <= 10){
            print_r("$count x $nb = ". $count * $nb . "<br />");
            $count++;
        }
    }

?>