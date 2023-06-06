<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre </p>

<h2>Résultat :</h2>


<?php

    //Solution 1
    function get_table(int $nb){
        print_r("Table de $nb : <br />");
        $str = '';
        for($i = 1; $i <= 10; $i++){
            $str .= "$i x $nb = ". $i * $nb . "<br />";
        }
        return $str;
    }
 
    echo get_table_alternative(4);

    //Solution 2
    function get_table_alternative($nb){
        print_r("Table de $nb : <br />");
        $str = "";
        $count = 1;
        while($count <= 10){
            $str = $str . "$count x $nb = ". $count * $nb . "<br />";
            $count++;
        }
        return $str;
    }

?>