<?php
class User {
    private $Nom;
    private $Prenom;
    
    public function afficheUser() {
        echo "Je suis un User";
    }
}
$user1 = new User();
?>
<table>
  <thead>
    <tr>
      <th colspan="2"><center>User</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><center>Nom</td>
      <td><center>String</td>
    </tr>
    <tr>
      <td><center>Prénom</td>
      <td><center>String</td>
    </tr>
    <tr>
      <th colspan="2"><center>Méthodes</td>
    </tr>
    <tr>
      <td><center>+afficheUser() : void</td>
      <td><center>Affiche le message "Je suis un User"</td>
    </tr>
  </tbody>
</table>
<style>table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid #ddd;
  text-align: left;
  padding: 8px;
}

th {
  background-color: #4CAF50;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>