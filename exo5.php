<h1>exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.
    Affichage :
    Montant en francs : 100
    100 francs = 15.24 €</p>

<?php

function convertirFrancsEnEuros($montantEnFrancs)
{

    $tauxConversion = 6.55957;

    $montantEnEuros = $montantEnFrancs / $tauxConversion;

    return round($montantEnEuros, 2);

}


$montantEnFrancs = 100;

$montantEnEuros = convertirFrancsEnEuros($montantEnFrancs);



echo $montantEnFrancs . " francs = " . $montantEnEuros . " euros";

