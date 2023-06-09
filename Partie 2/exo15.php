<h1>Exercice 15</h1>

<p>n utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.</p>

<h2>Résultat :</h2>


<?php
   
   $email = "louistest@gmail.com";

   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo("L'adresse $email est une adresse e-mail valide");
   } else {
    echo("L'adresse $email n'est pas une adresse e-mail valide");
   }
    
?>