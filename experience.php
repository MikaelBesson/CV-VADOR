<?php
require_once 'DB.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Experience</title>
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

        <h2 class="anim">Presentation :<button class="roll">&or;</button></h2>
            <section class="sect">
                <?php
                require_once 'DB.php';
                $conn = (new DB())->connect();
                $req = $conn->prepare("SELECT h2, content FROM title");
                if($req->execute()) {
                foreach($req->fetchAll() as $ligne) {
                ?>
                <div class="presentation">
                    <h2><?= $ligne['h2'] ?></h2>
                    <p><?= $ligne['content'] ?></p>
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

        <h2 class="anim">Experience :<button class="roll">&or;</button></h2>
            <section class="sect">
                <?php
                require_once 'DB.php';
                $conn = (new DB())->connect();
                $req = $conn->prepare("SELECT content_dd FROM dd_content where title_dd='Experiences'");
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