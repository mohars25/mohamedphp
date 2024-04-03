<h1>exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
    Affichage :
    Prix unitaire de l’article : 9.99 €
    Quantité : 5
    Taux de TVA : 0.2
    Le montant de la facture à régler est de : 59.94 €</p>

<?php

function calculerMontantFacture($quantite, $prixHorsTaxe, $tauxTVA)
{

    $totalHorsTaxe = $quantite * $prixHorsTaxe;

    $montantTVA = $totalHorsTaxe * $tauxTVA;

    $totalTTC = $totalHorsTaxe + $montantTVA;

    return $totalTTC;

}



$quantite = 10;

$prixHorsTaxe = 50;

$tauxTVA = 0.2;



$totalFacture = calculerMontantFacture($quantite, $prixHorsTaxe, $tauxTVA);

echo "Le montant total de la facture à régler est de " . $totalFacture . " euros.";

