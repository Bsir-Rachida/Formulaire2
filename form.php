<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
<form action="thanks.php" method="post">
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="user_lastname" required>
    </div>

    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname" required>
    </div>

    <div>
        <label for="phone">Téléphone :</label>
        <input type="text" id="phone" name="user_phone" required>
    </div>

    <div>
        <label for="email">e-mail :</label>
        <input type="email" id="email" name="user_mail" required>
    </div>
    <div>
    <label for="list">Sujet :</label>     
    <select name="user_list" id="list" required >Sujet :
    <option value="sujet">--Selectionnez votre sujet--</option>
    <option value="probléme de connexion">Probléme de connexion</option>
    <option value="l'identifiant ne fonctionne pas">Identifiant ne fonctionne pas</option>
    <option value="message d'erreur">Message d'erreur</option>
    </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message" required ></textarea>
    </div>

    <div>
    <INPUT TYPE="submit" NAME="submit" VALUE=" Envoyer ">
    <INPUT TYPE="reset" NAME="reset" VALUE=" Annuler ">
    </div>
   
</form>
</body>
</html>
