<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php 4</title>
</head>
<style>body{background-color:#5D5085;}</style>
<body>
    <h2 style='color:red'>Exercice 4</h2>
    <?php 
    $a=12;$b=7;$c=-3;
    $delta=pow($b,2)-4*($a*$c);
    echo "<p>On cherche à résoudre l'équation <strong>".$a."x² +".$b."x +".$c." = 0 </strong></p>"; 
    echo "<p>Commençons par calculer <strong>Δ</strong></p>";
    echo "<p>Pour rappel <strong>Δ=b²-4ac</strong></p>";
    echo "<p style='color:cyan'>Si Δ est positif, l'équation admet deux solutions réelles : </p><p style='color:cyan' >Z1 = (-b+√Δ)/2a</p><p style='color:cyan'>Z2 = (-b-√Δ)/2a";
    echo "<p style='color:orange'>Si Δ est nulle, l'équation admet une solution réelle : </p> <p style='color:orange'>Z0 = -b/2a</p>";
    echo "<p style='color:#FFFEAF'>Si Δ est négatif, l'équation n'admet pas de solution réelle mais admet bien deux solutions imaginaires (complexes)</p><p style='color:#FFFEAF'>ƶ1=(-b+<strong>i</strong>√Δ)/2a</p><p style='color:#FFFEAF'>ƶ2=(-b-<strong>i</strong>√Δ)/2a</p>";
    echo "<p>Ici <strong>Δ=".$delta."</strong></p>";
    if($delta>0){
        echo"<p>L'équation admet deux solutions réelles</p>";
        echo"<p>Z1= <strong>".(-$b+sqrt($delta))/2*$a."</strong></p>";
        echo"<p>Z2= <strong>".(-$b-sqrt($delta))/2*$a."</strong></p>";
    }
    if($delta<0){
        echo"<p>L'équation n'admet pas de solution réelle mais admet des<strong> solutions imaginaires ( complexes )</strong></p>";
    }
    if($delta==0){
        echo"<p>L'équation admet une solution</p>";
        echo"<p>Z0= <strong>".-$b/2*$a."</strong></p>";
    }
?>
    
</body>
</html>