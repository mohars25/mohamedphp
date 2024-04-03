<h1>Exercice 14</h1>


<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
    Affichage (si la date courante est le 21/05/2018 et la date de naissance le
    17/01/1985 :
    Age de la personne : 33 ans 4 mois 4 jours)</p>


<?php


$dateNaissance = "17-01-1985";
$aujourdhui = date("y-m-d");
$diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
echo 'Age de la personne  ' . $diff->format('%y') . " ans  " . $diff->format('%m') . " mois " . $diff->format('%d') . " jours";