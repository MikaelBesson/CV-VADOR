<?php
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hobbies</title>
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

        <h2 class="anim">Mes Hobbies :<button class="roll">&or;</button></h2>
            <section class="sect">
                <?php
                require_once 'DB.php';
                $conn = (new DB())->connect();
                $req = $conn->prepare("SELECT content_dd FROM dd_content where title_dd='Mes Hobbies'");
                if($req->execute()) {
                    ?>
                    <?php
                    foreach($req->fetchAll() as $ligne){
                        ?>
                        <ul>
                            <li><?=$ligne['content_dd'] ?></li>
                        </ul>
                        </div>
                        <?php
                    }}
                else {
                    ?>
                    }
                    <p>
                        Erreur, je n'ai pas été en mesure de récupérer ces informations
                    </p>
                    <?php
                }
                ?>
            </section>

    </nav>

    <footer>
        Dark Vador copyright 2021
    </footer>

    <script src="app.js"></script>
</body>
</html>