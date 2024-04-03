<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.
    Affichage :
    Montant à payer : 152 €
    Montant versé : 200 €
    Reste à payer : 48 €
    ***************************************************
    Rendue de monnaie :
    4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €</p>


<style>
    body{
        color: black;
        background-image:url(ticket.jpg) ;
        font-size: 150%;
        

    }
h1{
    color: blue;
    text-align: center;
    font-size: 400%;
}
    li{
        
        background-color: white;
        width: 20%;
        list-style-type: none;
        text-align: center;
        margin:0px auto;
        opacity: 90%;
        

        
    }
    p{
        background-color: black;
        color: white;
    }

    
</style>


    <?php
function rendreMonnaie($montantAPayer, $montantVerse) {
    $monnaieARendre = $montantVerse - $montantAPayer;


    $billets50=0;
    $billets20= 0;
    $billets10 = 0;
    $billets5 = 0;
    $pieces2 = 0;
    $pieces1 = 0;
    $pieces50 = 0;
  
    

    while ($monnaieARendre >= 50) {
        $billets50++;
        $monnaieARendre -= 50;
    }



    while ($monnaieARendre >= 20) {
        $billets20++;
        $monnaieARendre -=  20;
    }


    while ($monnaieARendre >= 10) {
        $billets10++;
        $monnaieARendre -=  10;
    }
    while ($monnaieARendre >= 5) {
        $billets5++;
        $monnaieARendre -= 5;
    }

    while ($monnaieARendre >= 2) {
        $pieces2++;
        $monnaieARendre -= 2;
    }

    while ($monnaieARendre >= 1) {
        $pieces1++;
        $monnaieARendre -= 1;
    }

    while ($monnaieARendre >= 0.50) {
        $pieces50++;
        $monnaieARendre -=  0.50;
    }

    

    
    // $pieces20 = $monnaieARendre;
    echo "<li>"."Montant à payer : " . $montantAPayer . " €";
    echo"<li>".  "Montant versé : " . $montantVerse . " €";
    echo"<li>". "Reste à payer : " . $montantVerse-$montantAPayer . " €" ;
    echo"<br>". "********************";
    echo "<li>"."Rendue de monnaie :";
    echo"<li>". $billets10 . " billet(s) de 10 €  ";
    echo "<li>".$billets5 . " billet(s) de 5 €  ";
    echo"<li>". $pieces2 . " pièce(s) de 2 €  ";
    echo"<li>". $pieces1 . " pièce(s) de 1 €";
    echo"<li>". $billets20 . " billet(s) de 20 €";
    echo "<li>". $billets50 . " billet(s) de 50 €";
    echo "<li>". $pieces50 . " piece(s) de 0.50 €";
}


rendreMonnaie(152.5, 312);




