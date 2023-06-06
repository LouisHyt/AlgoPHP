<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat :</h2>


<?php

    $options = [
        "Choix 1" => false,
        "Choix 2" => false,
        "Choix 3" => true,
      ];

      function genererCheckBox($options){
        $result = "";
        foreach ($options as $option => $isChecked) {
            $checkboxName = str_replace(" ", "", strtolower($option));
            $checkedValue = $isChecked ? "checked" : "unchecked";
            $result .= "
            <div>
                <input type='checkbox' name='$checkboxName' $checkedValue/>
                <label for='$checkboxName'>$option</label>
            </div>
            ";
        }
        return $result;
      }

      echo(genererCheckBox($options));

?>
