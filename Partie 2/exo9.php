<h1>Exercice 9</h1>

<p>Créer une fonctionpersonnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle").</p>

<h2>Résultat :</h2>


<?php

    $options = [
        "Radio 1" => false,
        "Radio 2" => true,
        "Radio 3" => false,
      ];

      function afficherRadio($options){
        $result = "";
        foreach ($options as $option => $isChecked) {
            $radioName = str_replace(" ", "", strtolower($option));
            $checkedValue = $isChecked ? "checked" : "unchecked";
            $result .= "
            <div>
                <input type='radio' name='radios' $checkedValue/>
                <label for='$radioName'>$option</label>
            </div>
            ";
        }
        return $result;
      }

      echo(afficherRadio($options));

?>