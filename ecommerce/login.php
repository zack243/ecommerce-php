<?php include 'header.php'; ?>

<main>
    <div class="form-container">
        <div class="form-box">
            <h2>Connexion</h2>
            <form action="login_process.php" method="post">
                <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <button type="submit" class="btn">Se connecter</button>
            </form>
            <a href="register.php" class="link">Vous n'avez pas de compte ? Créez un compte</a>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
