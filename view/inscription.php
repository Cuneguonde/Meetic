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
    <li class="nav__link"> <a href="index.php">Accueil</a> </li>
    <li class="nav__link"> <a href="../view/inscription.php">Subscribe</a></li>
    <li class="nav__link"> <a href="logged.php">Informations</a></li>  
    </ul>
    </nav>
    <body>


        <form action="../controller/inscription.php"  class="meetic-container-inscription" method="GET">
            <div class="form-sub-container">
        <label class="meetic-text-blue"><b>Nom</b></label>
            <input class="meetic-input w3-border" type="text" name="nom">
            </div>

            <div class="form-sub-container">
            <label class="meetic-text-blue"><b>Prénom</b></label>
            <input class="meetic-input w3-border" type="text" name="prenom">
            </div>

            <div class="form-sub-container">
            <label class="meetic-text-blue"><b>Date de naissance</b></label>
            <input class="meetic-input w3-border" type="text" name="dateDeNaissance">
            </div>
        
            <div class="form-sub-container">
            <select name="genre" id="genre">
                <option value="" selected disabled>Choisissez un genre</option> 
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>
            </select>
            </div>

            <div class="form-sub-container">
             <label class="meetic-text-blue"><b>Ville</b></label>
            <input class="meetic-input w3-border" type="text" name="ville">
            </div>

            <div class="form-sub-container">
            <label class="meetic-text-blue"><b>E-mail</b></label>
            <input class="meetic-input w3-border" type="text" name="email">
            </div>  

            <div class="form-sub-container">
            <label class="meetic-text-blue"><b>Mot de passe</b></label>
            <input class="meetic-input w3-border" type="text" name="mdp">
            </div>

            <div class="form-sub-container">
            <label class="meetic-text-blue"><b>Loisir</b></label>
            <input class="meetic-input w3-border" type="text" name="loisir">
                <button class="meetic-btn w3-blue">S’inscrire</button>
            </div>

            </form>
           <div class="faut-il-toujours-une-clasee">
            <p><a href="front_co.php">login up as'straight wully oh</a></p>
           </div>
    </body>
</html>