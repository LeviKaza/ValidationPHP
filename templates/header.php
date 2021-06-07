<?php session_start() ?>

<header>
    <nav>
        <ul>
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="recommandation.php">Recommandation</a></li>
            <?php if (isset($_SESSION['name'])): ?>
                <li class="menu"><a href=""><?= $_SESSION['name'] ?></a>
                    <ul class="none">
                        <li><a href="controllers/deconnexion.php">Deconnexion</a></li>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="connexion.php">Connexion</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>