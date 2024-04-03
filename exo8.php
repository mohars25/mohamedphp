<h1>exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
    forme :
    Affichage (pour la table de 8) :
    Table de 8 :
    1 x 8 = 8
    2 x 8 = 16
    3 x 8 = 24 …
    Remarque : proposer 2 solutions avec 2 types de boucles.
</p>


<style>

*{
    background-color: aquamarine;
    list-style-type: 1;
    
}



</style>

<?php

function tableDeMul($nombre)
{

    echo "Table de $nombre :\n";

    for ($i = 1; $i <= 10; $i++) {

        $resultat = $i * $nombre;

        echo " $i x $nombre  = $resultat <br>" ;

    }

}



TableDeMul(8);


