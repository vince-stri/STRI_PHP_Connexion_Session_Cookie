<?php
    
    $erreur =null;
    if (!empty($_POST["id"] && !empty($_POST["pass"]))){
        if ($_POST["id"] === "admin" && $_POST["pass"] === "admin"){
            session_start();
            $_SESSION['connected'] = 1;
            $_SESSION['id'] = $_POST['id'];
            header("Location: formation.php");
        }
        else {
            $erreur = "Identifiants incorrects";
        }
    }

    require_once 'auth.php';
    if (is_connected()){
        header("Location: formation.php");
    }
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <title>Connexion</title>
    </head>
    <body>
        <h1>Connexion</h1>
        <form method="post" action="connexion.php">
            <input type="text"  name="id" placeholder="Identifiant">
            <input type="password" name="pass" placeholder="Mot de passe">
            <input type="submit" name="connexion" value="Connexion">
            <br/><br/>
            <?php if ($erreur) echo $erreur; ?>
        </form>
    </body>
</html>