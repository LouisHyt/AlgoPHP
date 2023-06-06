<h1>Exercice 5</h1>

<p>Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.</p>

<h2>Résultat :</h2>


<?php

$formInput = ["Nom", "Prénom", "Adresse", "Date de naissance"];

foreach ($formInput as $field) {
    $lcField = strtolower($field);
    echo("
        <div>
            <label for='lcField'>$field</label>
            <input type='text' required name='$lcField' class='fieldinput'/>
        </div>
    ");
}

?>

<style>
    div {
        margin-block: 5px;
    }

    div > *{
        display: block;
    }

</style>