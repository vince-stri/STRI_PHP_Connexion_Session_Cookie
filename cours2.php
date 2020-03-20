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
    
    if (isset($_COOKIE["cours2"])){
        $cmptCours2 = $_COOKIE["cours2"]+1;
    }
    else {
        $cmptCours2 = 1;
    }
    setcookie("cours2",strval($cmptCours2));
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Cours 2</title>
    </head>
    <body>
        <?php  echo "Bonjour " . $_SESSION["id"]. " !"; ?>
        
        <form method="post" action="">
        <br/>
            <input type="submit" name="deconnexion" value="Deconnexion">
        </form>
        <a href="formation.php">< Formations</a><br/><br/>
        Nombre de consultation de ce cours : <?=$cmptCours2 ?>
        <h1>Cours 2</h1>
        <h3>Description du cours</h3>
        <p> Ceci est la description du cours 2</p>
    </body>
</html>