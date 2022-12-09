<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php 6</title>
</head>
<body>
<form action="" method="get" class="saisie">
  <div class="saisie">
    <label for="Saisir :">Saisissez quelque chose </label>
    <input type="text" name="champ1" id="name" required>
  </div>
  <?php echo "<h1 style='color:#B671E6'>" .$_GET['champ1']; ?>
</body>
</html>