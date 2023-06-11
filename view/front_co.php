<?php

?>
<!DOCTYPE html>
<html>
<head>
        <title>myMeeticntm</title>
        <link rel="stylesheet" href="../style/style.css"/>
    </head>
    <body>
    <!-- <a href="index.php"><h1>MyMeetic</h1></a>
    <a href="../view/inscription.php"><div class="canvas">connexion_inscription</div></a>
    <a href="logged.php"><div class="canvas">inscription</div></a>
    <a href="recherche"><div class="canvas">recherche</div></a> -->
    <nav class="nav">
    <ul>
    <li class="nav__link nav__link--active">myMeetic</li>
    <li class="nav__link"> <a href="index.php">Accueil</a> </li>
    <li class="nav__link"> <a href="../view/inscription.php">Subscribe</a></li>
    <li class="nav__link"> <a href="logged.php">Informations</a></li>  
    </ul>
    </nav>

        <form action="../controller/registering.php"  class="meetic-container-inscription" method="GET">
            <div class="form-sub-container">
        <label class="meetic-text-blue"><b>Mail</b></label>
            <input class="meetic-input w3-border" type="text" name="email">
            </div>

            <div class="form-sub-container">
            <label class="meetic-text-blue"><b>Password</b></label>
            <input class="meetic-input w3-border" type="text" name="mdp">
            </div>
            <button class="meetic-btn w3-blue">Se connecter</button>

</form>
</body>
</html>