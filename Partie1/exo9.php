<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable») :</p>

<h2>Résultat :</h2>


<?php
    $age_input = 26;
    $sexe_input = 'M';

    print_r("Age: $age_input <br />");
    print_r("Sexe: $sexe_input <br />");

    $condition1 = $age_input >= 18 && $age_input <= 35 && $sexe_input == 'F';
    $condition2 = $age_input > 20 && $sexe_input !== 'F';
    
    if($condition1 || $condition2){
        print_r("La personne est imposable.");
        return;
    }

    print_r("La personne n'est pas imposable.")



?>