<?php
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Dark Vador</h1>
    </header>

    <nav>
        <div class="menu">
            <ul>
                <li class="menu-ind">
                    <a href="index.php">Accueil</a>
                </li>
                <li class="menu-exp">
                    <a href="experience.php">Experience</a>
                </li>
                <li class="menu-hob">
                    <a href="Hobbies.php">Hobbies</a>
                </li>
                <li class="menu-contact">
                    <a href="Contact.php">Contact</a>
                </li>
            </ul>
        </div>

        <div class="form">
            <h2 class="anim">Contactez moi !</h2>
            <form action="contact.php" method="post">
                <fieldset id="form1">
                    <legend>Identifiant :</legend>
                    <label id="lab" for="name">Entrez votre nom :</label>
                    <input type="text" name="name" id="name"><br>
                    <label for="lastname">Entrez votre prenom :</label>
                    <input type="text" name="lastname" id="lastname"><br>
                </fieldset>

                <fieldset id="form2">
                    <legend>Presentation :</legend>
                    <label for="area">Presentez vous en quelques mots :</label><br>
                    <textarea name="pres" id="area" cols="50" rows="5"></textarea><br>
                    <input type="submit" value="Envoyer" id="submit">
                </fieldset>

            </form><br>
        </div>

    </nav>
    <br>

    <footer>
        Dark Vador copyright 2021
    </footer>

    <script src="app.js"></script>
</body>
</html>