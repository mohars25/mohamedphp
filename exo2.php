<h1>exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
    contenus dans celle-ci.
    Affichage :
    La phrase « Notre formation DL commence aujourd’hui » contient 5 mots.</p>


<?php

$phrase = "Notre formation DL commence aujourd'hui";

$nombreDeMots = str_word_count($phrase);

echo "Le nombre de mots dans la phrase est : " . $nombreDeMots;