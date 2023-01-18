<?php function MoyenneTab($table){
   $moy = array_sum($table)/count($table);
   return $moy;}?>

<?php 
$monTableau = Array
    (
    0 => 1,
    1 => 2,
    2 => 3,
    3 => 4,
    4 => 5,
    );
    echo "Voici mon tableau de valeurs :<p> ";
    for($i=0; $i<5;$i++)
    {            
      echo $monTableau[$i];
      echo "<br>";
    }
    $x=MoyenneTab($monTableau);
    echo "<p>La moyenne de mon tableau est :" .$x;
?>

