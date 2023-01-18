
<?php 
    function loginForm($password) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['password']) && $_POST['password'] === $password) {
            echo 'Bon mot de passe. <a href="https://www.youtube.com/@MonsieurRapidecho">Lien secret!</a>.';
            return 'ok'
            ;
        } else {
            echo 'Mot de passe incorrect..';
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h7><a href="https://www.youtube.com/watch?v=oavMtUWDBTM">Indice Mot de passe  ?</a></h7>';
        }
    }
    echo '<form method="post">Mot de passe : <input type="password" name="password" /><input type="submit" value="Se connecter" /></form>';
}
$password = 'root';
loginForm($password);
