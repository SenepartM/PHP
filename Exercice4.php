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
    
    public function attaquer($target) {
        echo "<span style='color:blue'>" . $this->Speudo . "</span> <span style='color:red;font-weight:bold'>attaque</span> <span style='color:#9937CE'>" . $target->getSpeudo() . "</span><br><br>";
        $target->defense(50);
    }

    public function defense($attaque) {
        $this->vie -= $attaque;  // $this->vie = $this->vie - $attaque;
        echo "<span style='color:#9937CE'>" . $this->Speudo . "</span> <span style='color:red;font-weight:bold'>subit</span> <span style='color:green'>" . $attaque . " points de dégâts</span> <br><br>";
        
        // Si la target a 0 PV ou - on ecrit "Target est mort"
        if ($this->vie <= 0) {
            echo "<span style='color:#9937CE'>" . $this->Speudo . "</span> <span style='color:red;font-weight:bold'>est mort☠️☠️☠️☠️</span><br><br>";
        }
    }
}

// INSTANCE
$user1 = new Personnage("Juju");
$user2 = new Personnage("Nunu");

// Le user 1 attaque le user 2
$user1->attaquer($user2);
$user2->attaquer($user1);
$user1->attaquer($user2); // ici il attaque deux fois pour le tuer (50-50=100) , a noter que pour faire ca mieux les degats pourraient etre pris en parametre et on pourrait faire par exemple une attaque de 70 une de 20 et une de 10

// RESULTAT DE L4ATTAQUE
echo "<br> <span style='color:white;background-color:black;padding:5px'>Résultat de l'attaque :</span><br><br><br>";
echo "<span style='color:blue'>" . $user1->getSpeudo() . "</span> a <span style='color:green'>" . $user1->getVie() . "</span> points de vie <br>";
echo "<span style='color:#9937CE'>" . $user2->getSpeudo() . "</span> a <span style='color:green'>" . $user2->getVie() . "</span> points de vie <br>";
?>
