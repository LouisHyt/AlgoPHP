<h1>Exercice 2</h1>

<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.</p>

<h2>Résultat :</h2>


<?php

    $capitales = [
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome"
    ];


    function afficherTableHTML($capitales){
        ksort($capitales);
        $tablecontent = '';
        foreach($capitales as $capitalKey => $capitalValue){
            $tablecontent .= "
            <tr>
                <td>".strtoupper($capitalKey)."</td>
                <td>$capitalValue</td>
            </tr>";
        }
        return 
            "<table>
                <thead>
                    <tr>
                        <th>Pays</td>
                        <th>Capitale</td>
                    </tr>
                </thead>
                <tbody>
                    $tablecontent
                </tbody>
            </table>";
    }

    echo(afficherTableHTML($capitales));

?> 

<style>
    table, th, td {
        border: 1px solid black;
    }
    td{
        padding-inline: 10px;
    }
</style>