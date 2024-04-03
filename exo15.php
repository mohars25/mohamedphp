<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
    Affichage :
    Michel DUPONT a … ans
    Alice DUCHEMIN a … ans</p>

<?php


// fonction pour recup des data personnel
// La visibilité d'une propriété, d'une méthode ou (à partir de PHP 7.1.0) une constante peut être
// définie en préfixant sa déclaration avec un mot-clé : public, protected, ou private. Les éléments déclarés comme 
//publics sont accessibles partout. L'accès aux éléments protégés est limité à la classe elle-même, ainsi qu'aux classes //
//qui en héritent et parente. L'accès aux éléments privés est uniquement réservé à la classe qui les a définis.
class Personne{

    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;

    
// // class MyClass
// {
//     // Déclare un constructeur public
//     public function __construct() { }

//     // Déclare une méthode publique
//     public function MyPublic() { }

//     // Déclare une méthode protégée
//     protected function MyProtected() { }

//     // Déclare une méthode privée
//     private function MyPrivate() { }

//     // Celle-ci sera publique
//     function Foo()
//     {
//         $this->MyPublic();
//         $this->MyProtected();
//         $this->MyPrivate();
//     }
// }




    public function __construct(string $nom,string $prenom,string $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
    

    }


    // $date = new DateTime($bithdayDate);
    // $now = new DateTime();
    // $interval = $now->diff($date);
    // return $interval->y;

    public function prendreAge()
    {
        $dateNaissance = $this->dateNaissance;
        $aujourdhui = new DateTime();
        $age = $aujourdhui->diff($dateNaissance);
        return $age->y;

    }
    
    // public function laPhrase()
    // {
    //     echo "<li>" . $this->prenom . " " . $this->nom . " a " . $this->prendreAge() . " ans" ;
    // }

//   __toString
public function __toString()
	{
        $age = $this->prendreAge();
		return "$this->prenom $this->nom a $age ans<br>";
	}
}
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
$p3 = new Personne("BOUFLIJA","MOHAMED", "1994-08-25");
echo $p1;
echo $p2;
echo $p3;





