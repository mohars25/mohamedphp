<h1> exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ».
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase
    (espaces inclus).
    Affichage :
    La phrase « Notre formation DL commence aujourdhui » contient 39 caractères.
</p>

<?php


$phrase = "Notre formation DL commence aujourdhui";
$nbCaracteres = strlen($phrase);
echo "la phrase contient $nbCaracteres caractères";
echo "la phrase contient " . strlen($phrase) . " caracteres";


