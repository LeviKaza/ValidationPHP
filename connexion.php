<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/connexion.css">
        <link rel="stylesheet" href="css/footer.css">
    </head>
    <body>
        <?php require_once 'templates/header.php' ?>
        <form action="controllers/sessionStart.php" method="POST">
            <div>
                <label for="pseudo">Identifiant :</label>
                <input type="text" class="pseudo" name="pseudo" required>
            </div>
            <div>
                <label for="password">Mot de Passe :</label>
                <input type="password" class="password" name="password" required>
            </div>
            <?php if (isset($_GET['error'])): ?>
                <p class="error">Mot de passe ou identifiant incorrect</p>
            <?php endif ?>
            <input type="submit" value="Connexion">
        </form>
        <?php require_once 'templates/footer.php' ?>
    </body>
</html>