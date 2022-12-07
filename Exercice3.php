<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php 3</title>
</head>
<style>body{background-color:grey;}</style>
<body>
<h2>Exercice 3</h2>
<caption> NOM | PRENOM | MOTDEPASSE</caption>
<?php 

$i=0;
$table = array(
    0 => array('Nom'=>'Senepart','Prénom'=>'Mathias','MDP'=>'AleaJactaEst'),
    1 => array('Nom'=>'Briaux','Prénom'=>'Sixmonts','MDP'=>'CaveCanem'),
    4 => array('Nom'=>'Seishiro','Prénom'=>'Isagi','MDP'=>'FluctuatNecMergitur'),
    3 => array('Nom'=>'Burguet','Prénom'=>'Luka','MDP'=>'InVinoVeritas'),
    2 => array('Nom'=>'Briaux','Prénom'=>'Li-loup','MDP'=>'HomoHominiLupus'),
);
?>
<table border="1">
<?php
for($i=0;$i<sizeof($table);$i++){
    echo "<tr><td>".$table[$i]['Nom']."|".$table[$i]['Prénom']."|".$table[$i]['MDP']."</td></tr>";
}
?>
</table>
</body>
</html>