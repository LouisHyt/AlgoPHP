<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge:</p>

<h2>Résultat :</h2>


<?php

    $age_input = 11;
    $category;

    if($age_input >= 6 && $age_input <= 7){
        $category = "Poussin";
    }
    if($age_input >= 8 && $age_input <= 9){
        $category = "Pupille";
    }
    if($age_input >= 10 && $age_input <= 11){
        $category = "Minime";
    }
    if($age_input >= 12){
        $category = "Cadet";
    }

    if(isset($category)){
        print_r("L'enfant qui a $age_input ans appartient à la catégorie $category");
    } else {
        print_r("Désolé, l'enfant qui a $age_input ans n'appartient a aucune catégorie");
    }

?>