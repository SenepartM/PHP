<?php
// pour show les erreurs php sans aller changer la config, jl'ai jamais fait chez moi.. 
error_reporting(E_ALL);    
ini_set("display_errors", 1);
class Personnage {
    private $id;
    private $Speudo;
    private $vie;
    private $pdo;

    public function __construct($id) {
        $this->id = $id;
        $this->pdo = new PDO("mysql:host=localhost;dbname=ObjetExo", "root", "root"); // on se connecte a notre base avec les bons identifiants
        $requete = $this->pdo->prepare("SELECT * FROM personnage WHERE id = :id");    // la requete de l'exercice 
        $requete->execute(['id' => $this->id]); // pour que la requete s'execute sur l'id recu en paramètre par le constructeur , donc a l'appelle du nouveau personnage
        $result = $requete->fetch(PDO::FETCH_ASSOC); // FETCH_ASSOC permet de recuperer les résultats de la requete sous forme de tableau associatiof ou les noms des colonnes de la table sont les clés du tableau, ici Speudo est le resultat de la colonnes Speudo source : https://waytolearnx.com/2020/01/php-mysqli-fetch_assoc.html
        $this->Speudo = $result['Speudo']; // le pseudo du personnage devient le resultat de la requete pour l'id selectionné
        $this->vie = $result['vie']; // la vie du personnage devient le resultat de la requete pour l'id selectionné
    }
    // fonction classique pour afficher les infos du perso
    public function AfficherPersonnage() {
        echo "Pseudo : " . $this->Speudo . "<br>";
        echo "Vie : " . $this->vie . "<br><br><br>";
    }
}
// ON INSTANCIE PLUSIEURS PERSONNAGE EN DONANNT EN PARAMETRE UN ID ( QUI EXISTE DANS MA TABLE )
$P1 = new Personnage(1);
$P1->AfficherPersonnage();

$P2 = new Personnage(2);
$P2->AfficherPersonnage();

$P3 = new Personnage(3);
$P3->AfficherPersonnage();

$P4 = new Personnage(4);
$P4->AfficherPersonnage();

$P5 = new Personnage(5);
$P5->AfficherPersonnage();

$P6 = new Personnage(6);
$P6->AfficherPersonnage();
