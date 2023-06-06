<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment,  créer  un  formulaire complet  qui  contient  les  informations  suivantes:  champs  de  texte avec  nom,  prénom,  adresse  e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation: «Développeur Logiciel»,«Designer web», «Intégrateur» ou «Chef de projet».Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

<h2>Résultat :</h2>


<?php


    $genre = ["Homme","Femme","Autre"];
    $formInput = ["Nom", "Prénom", "Adresse", "e-mail"];
    $formationOptions = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];
    $genreOptions = [
        "Homme" => false,
        "Femme" => true,
        "Autre" => false
      ];

      function generateGenreInput($genreOptions){
        $result = "<div class='genre'>";
        foreach ($genreOptions as $option => $isChecked) {
            $radioName = str_replace(" ", "", strtolower($option));
            $checkedValue = $isChecked ? "checked" : "unchecked";
            $result .= "
            <div>
                <input type='radio' name='radios' $checkedValue/>
                <label for='$radioName'>$option</label>
            </div>
            ";
        }
        $result .= '</div>';
        return $result;
      }

    function generateSubmitButton($text){
        $button = "<input type='submit' name='submit' value='$text'>";
        return $button;
    }
    
    function generateInfos($requiredInfos){
        foreach ($requiredInfos as $field) {
            $lcField = strtolower($field);
            echo("
                <div>
                    <label for='lcField'>$field</label>
                    <input type='text' required name='$lcField' class='fieldinput'/>
                </div>
            ");
        }
    }

    function generateFormation($formationOptions){
        $options = "<label for='selection' >Intitulé de formation</label><select name='selection'>";
        foreach($formationOptions as $option){
            $options .= "<option value='".strtolower($option)."'>$option</option>";
        }

        $options .= "</select>";
        
        return $options;
    }


    echo("<form method='POST' action='/getFormData.php'>");
    echo(generateInfos($formInput));
    echo(generateGenreInput($genreOptions));
    echo(generateFormation($formationOptions));
    echo("<br />");
    echo(generateSubmitButton("Envoyer le formulaire"));
    echo("</form>");
    
    
?>


<style>
    div > * {
        display: block;
    }

    div{
        margin-block: 5px;
    }
    
    .genre{
        display: flex;
        gap: 15px;
    }

    input[type="submit"]{
        margin-top: 10px;
    }


</style>