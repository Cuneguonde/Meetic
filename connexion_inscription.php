<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="style.css">
    </head>
    <body>
        <a href="index.html"><h1>MyMeetic</h1></a>
        <h2>Connexion</h2>
        <form action="connect_obj.php"  class="meetic-container">

            <label class="meetic-text-blue"><b>Email</b></label>
            <input class="meetic-input w3-border" type="text" name="email">
             
            <label class="meetic-text-blue"><b>Mot de passe</b></label>
            <input class="meetic-input w3-border" type="text" name="mdp">
        
            <select name="genre" id="genre">
                <option value="" selected disabled>Choisissez un genre</option> 
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>
             </select>
                <button class="meetic-btn w3-blue">S’inscri re</button>

            </form>
            <a href="inscription.php">Inscription</a> 
    </body>
</html>
