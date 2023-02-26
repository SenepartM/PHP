<?php
// pour show les erreurs php sans aller changer la config, jl'ai jamais fait chez moi.. 
error_reporting(E_ALL);    
ini_set("display_errors", 1);
class Personnage {
    private $Speudo;
    private $Vie;
    
    public function __construct() {
        $this->Vie = 100;
    }
}
//INSTANCE
$user1 = new Personnage(); 



/*  pour faire tout ca il faudrait des propriétés public comme on passe pas par des méthodes de changement de nom .. mais pas safe
?><?php
// On lui donne un blaz
$user1->Speudo = "KEKW";

// Afficher le pseudo et la vie du personnage
echo "Pseudo : " . $user1->Speudo . "<br>"; // pas bien de br c est pas google friendly mais c est pratique quand meme !!!
echo "Vie : " . $user1->Vie; 
?>*/