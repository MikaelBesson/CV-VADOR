<?php

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="connexion">
        <h2>Connectez vous !!</h2>
        <form action="form.php" method="post"></form>
            <fieldset>
                <legend>Vos identifiants :</legend>
                <label for="name_co" id="name_co">Entrez votre nom :</label>
                <input type="text" name="name-co" id="name_co"><br>
                <label for="lastN_co" id="lastN_co">Entrez votre prenom :</label>
                <input type="text" name="lastN_co" id="lastN_co"><br><br>
                <input type="submit" value="Ce connecter" id="input_co"><br>
                <a href="index.php">Retour a l'index</a>
            </fieldset>
    </div>

    <script src="app.js"></script>
</body>
</html>
