<?php
    require_once 'auth.php';
    if (!is_connected()){
        header("Location: connexion.php");
    }
    if (isset($_POST['deconnexion'])){
        unset($_SESSION['connected']);
        unset($_SESSION['id']);
        header("Location: connexion.php");
    }
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Formations</title>
    </head>
    <body>
        <?php  echo "Bonjour à toi " . $_SESSION["id"]. " !"; ?>
        
        <form method="post" action="">
        <br/>
            <input type="submit" name="deconnexion" value="Deconnexion">
        </form>
        <h1>Formations</h1>
        <a href="cours1.php"> 1er Cours</a>
        <br/>
        <a href="cours2.php"> 2eme Cours</a>
    </body>
</html>