    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php 2</title>
    </head>
    <style>body{background-color:grey;}</style>
    <body>
        <h2>2.1</h2>
        <?php 
        $array = [
            0 => 1,
            1 => 2,
            2 => 3,
            3 => 4,
            4 => 5
        ];
        echo "<table border='1'><tr>";
        for ($i=0;$i<5;$i++){
            echo "<th>" .$array[$i]."</th>";
        }
        echo "</tr></table>";
        ?>
<h2>2.2</h2>
<?php 
$table = array(
    'Nom' => 'Sénépart',
    'Prénom' => 'Mathias',
    'MDP' => 'MonMotDePasse',
);

echo "<p style='color:darkblue'>Le nom : ".$table['Nom']."<p>";
echo "<p style='color:white'>Le prénom : ".$table['Prénom']."<p>";
echo "<p style='color:red'>Le MDP : ".$table['MDP']."<p>";
?>



    </body>
    </html>