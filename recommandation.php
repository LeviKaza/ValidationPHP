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
                <a href="https://www.nautiljon.com/animes/akame+ga+kill!.html"><img src="img/akameGaKill.jpg"></a>
                <a href="https://www.nautiljon.com/animes/ansatsu+kyoushitsu.html"><img src="img/assassinationClassroom.jpg"></a>
                <a href="https://www.nautiljon.com/animes/citrus.html"><img src="img/citrus.jpg"></a>
                <a href="https://www.nautiljon.com/animes/darker+than+black+-+kuro+no+keiyakusha.html"><img src="img/darkerThanBlack.jpg"></a>
                <a href="https://www.nautiljon.com/animes/death+parade.html"><img src="img/deathParade.jpg"></a>
                <a href="https://www.nautiljon.com/mangas/dusk+maiden+of+amnesia.html"><img src="img/duskMaidenOfAmnesia.jpg"></a>
                <a href="https://www.nautiljon.com/animes/kyoukai+no+kanata.html"><img src="img/kyoukaiNoKanata.jpg"></a>
                <?php if ($_SESSION['name'] === 'Yuri'): ?>
                    <input type="checkbox" onclick="viewAnime()">
                <?php endif ?>
            </div>
            <div id="manga" class="display">
                <p>Manga :</p>
                <a href="https://www.nautiljon.com/mangas/artelier+collection.html"><img src="img/artelier.jpg"></a>
                <a href="https://www.nautiljon.com/mangas/bloom+into+you.html"><img src="img/bloomIntoYou.jpg"></a>
                <a href="https://www.nautiljon.com/mangas/komi-san+wa+commu-shou+desu..html"><img src="img/komiSan.jpg"></a>
                <a href="https://www.nautiljon.com/mangas/hitomi-chan+wa+hito+mishiri.html"><img src="img/hitomiChan.jpg"></a>
                <a href="https://www.nautiljon.com/mangas/the+ancient+magus+bride.html"><img src="img/mahouTsukaiNoYome.jpg"></a>
                <a href="https://www.nautiljon.com/mangas/moi,+quand+je+me+r%C3%A9incarne+en+slime.html "><img src="img/tensura.jpg"></a>
                <a href="https://www.nautiljon.com/mangas/tonikaku+kawaii.html"><img src="img/tonikakuKawai.jpg"></a>
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