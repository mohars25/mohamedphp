<h1>exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.
    Affichage :
    La phrase « Engage le jeu que je le gagne » est palindrome</p>



<?php
function estPalindrome($phrase)
{


    $phrase = strtolower($phrase);




    $phrase = preg_replace("/[^a-z0-9]/i", "", $phrase);





    return $phrase === strrev($phrase);

}





$phrase = "Engage le jeu que je le gagne";

if (estPalindrome($phrase)) {

    echo "La phrase est un palinsdrome.";

} else {

    echo "La phrase n'est pas un palindrome.";

}

