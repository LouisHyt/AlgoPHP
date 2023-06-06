<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<h2>Résultat :</h2>


<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($elements){
    $options = '';
    foreach($elements as $option){
        $options .= "<option value='".strtolower($option)."'>$option</option>";
    }

    return "
        <select name='selection'>
            $options
        </select>";
}

echo(alimenterListeDeroulante($elements));
?>
