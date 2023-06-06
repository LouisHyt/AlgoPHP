<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge:</p>

<h2>Résultat :</h2>


<?php

    $age_input = 15;
    $category;
 
    //Méthode optimale
    switch(true){
        case $age_input >=12 :
            $category= "Cadet";
            break;
        case $age_input >=10 :
            $category= "Minime";
            break;
        case $age_input >=8 :
            $category= "Pupille";
            break;
        case $age_input >=6 :
            $category= "Poussin";
            break;
    }


    if(isset($category)){
        print_r("L'enfant qui a $age_input ans appartient à la catégorie $category");
    } else {
        print_r("Désolé, l'enfant qui a $age_input ans n'appartient a aucune catégorie");
    }

?>