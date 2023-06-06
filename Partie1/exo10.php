<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€ :</p>

<h2>Résultat :</h2>


<?php
  $to_pay = 127;
  $payed = 200;
  $rendu = 48;

  print_r("Montant à payer: $to_pay €<br />");
  print_r("Montant versé: $payed €<br />");
  print_r("Reste à payer: $rendu €<br />");

  $difference = $payed - $to_pay;
  if($difference < 0){
    print_r("Votre paiement ne couvre pas l'entiereté de vos dépenses");
    return;
  }

  $ten = intval($difference / 10, 0);
  $difference -= $ten * 10;
  $five = intval($difference / 5, 0);
  $difference -= $five * 5;
  $two = intval($difference / 2, 0);
  $difference -= $two * 2;
  $one = intval($difference / 1, 0);
  $difference -= $one * 2;
  
  print_r("Rendue de monnaie: <br />");
  if($ten > 0){
    print_r("$ten billets de 10€");
  } 
  if($five > 0){
    print_r(" - $five billets de 5€");
  }
  if($two > 0){
    print_r(" - $one pièce de 2€");
  }
  if($one > 0){
    print_r(" - $one pièce de 1€");
  }

?>