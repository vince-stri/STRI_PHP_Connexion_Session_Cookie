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
    
    if (isset($_COOKIE["cours1"])){
        $cmptCours1 = $_COOKIE["cours1"]+1;
    }
    else {
        $cmptCours1 = 1;
    }
    setcookie("cours1",strval($cmptCours1));
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Cours 1</title>
    </head>
    <body>
        <?php  echo "Bonjour " . $_SESSION["id"]. " !"; ?>
        
        <form method="post" action="">
        <br/>
            <input type="submit" name="deconnexion" value="Deconnexion">
        </form>
        <a href="formation.php">< Formations</a><br/><br/>
        Nombre de consultation de ce cours : <?=$cmptCours1 ?>
        <h1>Cours 1</h1>
        <h3>Description du cours</h3>
        <p> Ceci est la description du cours 1</p>
    </body>
</html>