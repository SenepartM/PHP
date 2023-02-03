<!DOCTYPE html>
<html>
<head>
  <title>Gestion des médecins</title>
  <style>
   body {
  font-family: Arial, sans-serif;
}

h1 {
  text-align: center;
  margin: 40px 0;
}

form {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin: 20px 0;
}

form input[type="text"] {
  padding: 8px 10px;
  margin: 0 10px;
  width: 20%;
  border: 1px solid #ccc;
  border-radius: 4px;
}

form input[type="submit"] {
  padding: 8px 20px;
  border: 1px solid #333;
  border-radius: 4px;
  background-color: #333;
  color: #fff;
  cursor: pointer;
  font-weight: bold;

}

table {
  margin: 20px 0;
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid #333;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #333;
  color: #fff;
}

button[type="button"] {
  padding: 8px 10px;
  border: 1px solid #333;
  border-radius: 4px;
  background-color: #333;
  color: #fff;
  cursor: pointer;
  margin-right: 10px;
  font-weight: bold;
}
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}
th, td {
  border: 1px solid black;
  padding: 8px;
  text-align: left;
}
th {
  background-color: #f2f2f2;
  color : #4682B4;
}
form {
  margin-top: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
form input[type="text"] {
  width: 50%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}
form input[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
form button[type="button"] {
  padding: 10px 20px;
  background-color: #f2f2f2;
  color: black;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-right: 20px;
  font-weight: bold;
}
a.delete-button {
  background-color: red;
  color: white;
  padding: 7px 14px;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
  display: inline-block;
}


  </style>
</head>
<body>

  <?php
  $ipserver="192.168.64.206";
  $nomBase="atp_ranking";
  $loginPrivilege ="root";
  $passPrivilege="root";
  $BasePDO= new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

  // Fonction pour ajouter un tennisman
  if(isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $country = $_POST['country'];
    $atp_rank = $_POST['atp_rank'];
    $sql = "INSERT INTO players (nom, prenom, country, atp_rank) VALUES (:nom, :prenom, :country, :atp_rank)";
    $stmt = $BasePDO->prepare($sql);
    $stmt->execute(['nom' => $nom, 'prenom' => $prenom, 'country' => $country, 'atp_rank' => $atp_rank]);
    

  }

  // Fonction pour mettre à jour un tennisman
  if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $country = $_POST['country'];
    $atp_rank = $_POST['atp_rank'];
    $sql = "UPDATE `players` SET nom = :nom, prenom = :prenom,country = :country, atp_rank = :atp_rank WHERE id = :id";
    $stmt = $BasePDO->prepare($sql);
    $stmt->execute(['nom' => $nom, 'prenom' => $prenom, 'country' => $country, 'atp_rank' => $atp_rank, 'id' => $id]);    
  }

  // Fonction pour supprimer un tennisman
  if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM `players` WHERE id = :id";
    $stmt = $BasePDO->prepare($sql);
    $stmt->execute(['id' => $id]);
  }

  // Affichage du classement ATP
  $sql = "SELECT * FROM `players` ORDER BY 'atp_rank' DESC";
  $stmt = $BasePDO->prepare($sql);
  $stmt->execute();
  $players = $stmt->fetchAll();
  ?>

  <h1>Gestion du classement ATP</h1>

  <!-- Formulaire pour ajouter un tennisman -->
  <form action="" method="post">
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="prenom" placeholder="Prénom">
    <input type="text" name="country" placeholder="Country">
    <input type="text" name="atp_rank" placeholder="Ranking">
    <input type="submit" name="submit" value="Add">

  </form>
  <!-- Tableau pour afficher tous les tennisman -->
  <table>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Country</th>
      <th>Ranking</th>
    </tr>
    <?php foreach($players as $player): ?>
      <tr>
        <td><?php echo $player['id']; ?></td>
        <td><?php echo $player['nom']; ?></td>
        <td><?php echo $player['prenom']; ?></td>
        <td><?php echo $player['country']; ?></td>
        <td><?php echo $player['atp_rank']; ?></td>
        <td>
          <!-- Bouton pour éditer un tennisman -->
          <button type="button" onclick="document.getElementById('edit-<?php echo $player['id']; ?>').style.display='block'">Edit</button>
                <!-- Formulaire pour éditer un tennisman -->
      <form action="" method="post" id="edit-<?php echo $player['id']; ?>" style="display:none">
        <input type="hidden" name="id" value="<?php echo $player['id']; ?>">
        <input type="text" name="nom" value="<?php echo $player['nom']; ?>">
        <input type="text" name="prenom" value="<?php echo $player['prenom']; ?>">
        <input type="text" name="country" value="<?php echo $player['country']; ?>">
        <input type="text" name="atp_rank" value="<?php echo $player['atp_rank']; ?>">
        <input type="submit" name="update" value="Update">
      </form>

      <!-- Bouton pour supprimer un médecin -->
      <a href="?delete=<?php echo $player['id']; ?>" class="delete-button">Delete</a>

    </td>
  </tr>
<?php endforeach; ?>
