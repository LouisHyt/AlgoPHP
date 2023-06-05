<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</p>

<h2>Résultat :</h2>


<?php

    class Personne {
        function __construct($name, $surname, $birthday){
            $this->name = $name;
            $this->surname = $surname;
            $this->birthday = $birthday;
        }

        function getPersonInfo(){
            return [
                "name" => $this->name,
                "surname" => $this->surname,
                "age" => $this->getAge()
            ];
        }

        private function getAge(){
            $birthday = new DateTime($this->birthday);
            $now = new DateTime('now');
            $ecard = $now->diff($birthday);
            return [
                $ecard->y,
                $ecard->m,
                $ecard->d
            ];
        }

    }

    $p1 = new Personne("DUPONT","Michel", "1980-02-19");
    $p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");

    $p1infos = $p1->getPersonInfo();
    $p2infos = $p2->getPersonInfo();

    echo($p1infos['surname'] . " " . $p1infos['name'] . " a " . $p1infos['age'][0]. "ans" );
    echo("<br />");
    echo($p2infos['surname'] . " " . $p2infos['name'] . " a " . $p2infos['age'][0]. "ans" );

?>