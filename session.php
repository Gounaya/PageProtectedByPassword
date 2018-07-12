<?php
    session_start();

    $_SESSION['prenom'] = 'Oussama';
    $_SESSION['nom'] = 'Gounaya';
    $_SESSION['age'] = 21;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
        Salut <?php echo $_SESSION['prenom']; ?> !<br />
        Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?
    </p>
    <p>
        <a href="mapage.php">Lien vers mapage.php</a><br />
        <a href="monscript.php">Lien vers monscript.php</a><br />
        <a href="informations.php">Lien vers informations.php</a> <br>
        <a href="deconnexion.php">Déconnexion</a>
    </p>
    </body>
</html>