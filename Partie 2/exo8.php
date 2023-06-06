<h1>Exercice 8</h1>

<p>Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<h2>Résultat :</h2>


<?php

$imageUrl="https://my.mobirise.com/data/userpic/764.jpg";

function repeaterImage($url, $count){
    $result = "<div>";
    for($i = 0; $i < $count; $i++){
      $result .= "<img src=$url alt='image de chien mignon' />";
    }
    
    $result .= "</div>";
    return $result;
  }

  echo(repeaterImage($imageUrl, 5));

?>

<style>
  div{
    display: flex;
    gap: 5px;
    justify-content: center;
    flex-wrap: wrap;
  }
  img{
    width: 150px;
  }
</style>
