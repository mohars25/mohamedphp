<h1>Exercice 7</h1>


<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
    Poussin : entre 6 et 7 ans
    Pupille : entre 8 et 9 ans
    Minime : entre 10 et 11 ans
    Cadet : à partir de 12 ans
    Si la catégorie n’est pas gérée, merci de le préciser.
    Affichage :
    L’enfant qui a 10 ans appartient à la catégorie « Minime »</p>








<?php

function categorie($age)
{

    if ($age >= 6 && $age <= 7) {

        return "Poussin";

    } elseif ($age >= 8 && $age <= 9) {

        return "Pupille";

    } elseif ($age >= 10 && $age <= 11) {

        return "Minime";

    } elseif ($age >= 12) {

        return "Cadet";

    } else {

        return "Catégorie non gérée";

    }

}



echo "Un enfant de 7 ans appartient à la catégorie : " . categorie(7) . "<br>";

echo "Un enfant de 8 ans appartient à la catégorie : " . categorie(8) . "<br>";

echo "Un enfant de 12 ans appartient à la catégorie : " . categorie(12) . "<br>";

echo "Un enfant de 4 ans appartient à la catégorie : " . categorie(4) . "<br>";

