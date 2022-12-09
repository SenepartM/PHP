<?php session_start();?>
<form action="Exercice7.php" method="post">
            <label>Veuillez saisir un secret :</label>
            <input type="text" placeholder="ex : il pleut dehors" name="secret">
            <input type="submit" value="Confirmer">            
        </form> <br>

        <?php

            if(!isset(($_SESSION["User"]))){
            $_SESSION["User"] = $_POST["secret"];}
            if (!isset(($_SESSION["User"])))
            {
                echo "<h1 style='color:red'> Pas de secret saisie pour cette session, veuillez saisir un secret !</h1>";
                
            }
            else{
                echo "<h1 style='color:blue'> Le secret associe à cette séssion est : ".$_SESSION["User"];
            }

        ?>