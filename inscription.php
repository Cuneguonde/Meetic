<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="style.css">
    </head>
    <body>
    <a href="index.html"><h1>MyMeetic</h1></a>

        <form action="connect_obj.php"  class="meetic-container-inscription" method="GET">
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
           
    </body>
</html>