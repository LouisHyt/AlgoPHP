<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)</p>

<h2>Résultat :</h2>


<?php

$article_price = 9.99;
$quantity = 5;
$taux = 0.2;
 
$tva = ($article_price * $quantity) * $taux;
$final = ($article_price * $quantity) + $tva;

print_r("Prix unitaire de l’article: $article_price € <br />");
print_r("Quantité: $quantity <br />");
print_r("Taux de TVA: $taux <br />");
print_r("Le montant de la facture à régler est de : $final €");

?>