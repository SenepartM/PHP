<?php
// pour show les erreurs php sans aller changer la config, jl'ai jamais fait chez moi.. 
error_reporting(E_ALL);    
ini_set("display_errors", 1);
class Personnage {
    private $Speudo;
    private $vie;
    
    public function __construct($Speudo) {
        $this->vie = 100;
        $this->Speudo = $Speudo;
    }

    public function getSpeudo() {
        return $this->Speudo;
    }
    public function getVie() {
        return $this->vie;
    }
}

//INSTANCE
$user1 = new Personnage("Juju");

// Affiche le pseudo et la vie du personnage
echo "Speudo : " . $user1->getSpeudo() . "<br>"; 
echo "Vie : " . $user1->getVie();
?>