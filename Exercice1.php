<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1</title>
</head>
<body>
    <div>
<?php $rdm=rand(0,100);
if($rdm %2 ==0){
    echo"<p style='background-color:red;'>Le nombre $rdm est pair</p>";
} else{
    echo"<p style='background-color:cyan;'>Le nombre $rdm est impair</p>";
}
?>




</div>
</body>
</html>
