<h1>exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
    « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<?php

$phraseOriginale = "Notre formation DL commence aujourd'hui";

$phraseModifiee = str_replace("aujourd'hui", "demain", $phraseOriginale);



echo "Phrase originale : " . $phraseOriginale . "\n";

echo "Phrase modifiée : " . $phraseModifiee;

?>