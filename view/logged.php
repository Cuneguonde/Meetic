<?php 

?>
<!DOCTYPE html>
<html>
<head>
        <title>myMeeticntm</title>
        <link rel="stylesheet" href="../style/style.css"/>
    </head>
    <!-- <a href="index.php"><h1>MyMeetic</h1></a>
    <a href="../view/inscription.php"><div class="canvas">connexion_inscription</div></a>
    <a href="logged.php"><div class="canvas">inscription</div></a>
    <a href="recherche"><div class="canvas">recherche</div></a> -->
    <nav class="nav">
    <ul>
    <li class="nav__link nav__link--active">myMeetic</li>
    <li class="nav__link"> <a href="../view/index.php">Accueil</a> </li>
    <li class="nav__link"> <a href="../view/inscription.php">Subscribe</a></li>
    <li class="nav__link"> <a href="logged.php">Informations</a></li>  
    </ul>
    </nav>
    <body class="meetic-text-blue">

 <p><?php if(!empty($_SESSION['nom']))  echo $_SESSION['nom'] ?></p>
 <p><?php if(!empty($_SESSION['prenom'])) echo $_SESSION['prenom'] ?></p>
 <p><?php if(!empty($_SESSION['dateDeNaissance']))echo $_SESSION['dateDeNaissance'] ?></p>
 <p><?php if(!empty($_SESSION['genre'])) echo $_SESSION['genre']?></p>
 <p><?php if(!empty($_SESSION['ville'])) echo $_SESSION['ville']?></p>
 <p><?php if(!empty($_SESSION['email'])) echo $_SESSION['email'] ?></p>
    </body>
 
</html>
