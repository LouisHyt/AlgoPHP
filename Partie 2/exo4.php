<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</p>

<h2>Résultat :</h2>


<?php

    $capitales= array(
        "France"=>"Paris",
        "Allemagne"=>"Berlin",
        "USA"=>"Washington",
        "Italie"=>"Rome",
        "Espagne"=>"Madrid"
    );


    function afficherTableHTML($capitales){
        asort($capitales);
        $tablecontent = '';
        foreach($capitales as $capitalKey => $capitalValue){
            $tablecontent .= "
            <tr>
                <td>".strtoupper($capitalKey)."</td>
                <td>$capitalValue</td>
                <td>
                    <a href='https://fr.wikipedia.org/wiki/".strtolower($capitalValue)."' target='_blank'>Lien</a>
                </td>
            </tr>";
        }
        return 
            "<table>
                <thead>
                    <tr>
                        <th>Pays</td>
                        <th>Capitale</td>
                        <th>Wikipedia</th>
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