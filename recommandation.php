<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/recommandation.css">
        <script src="js/visbility.js" defer></script>
    </head>
    <body>
    <?php require_once 'templates/header.php' ?>
        <div class="all">
            <div id="anime" class="display">
                <p>Anime :</p>
                <img src="img/fateUbwCover.jpg">
                <?php if ($_SESSION['name'] === 'Yuri'): ?>
                    <input type="checkbox" onclick="viewAnime()">
                <?php endif ?>
            </div>
            <div id="manga" class="display">
                <p>Manga :</p>
                <img src="img/slime.jpg">
                <?php if ($_SESSION['name'] === 'Yuri'): ?>
                    <input type="checkbox" onclick="viewManga()">
                <?php endif ?>
            </div>
            <div id="light" class="display">
                <p>Light Novel :</p>
                <div>
                    <h1>Oups !</h1>
                    <p>On dirait que notre critique n'as pas finit d'analyser les lights novel.</p>
                    <p>Nous esperons que cette section indisponible pour le moment arriveras vite.</p>
                </div>
                <?php if ($_SESSION['name'] === 'Yuri'): ?>
                    <input type="checkbox" onclick="viewLight()">
                <?php endif ?>
            </div>
        </div>
    </body>
</html>