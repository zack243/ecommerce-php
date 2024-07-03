<?php include 'header.php'; ?>

<div class="form-container">
  <div class="form-box">
    <h2>Créer un compte</h2>
    <form action="process_register.php" method="post">
      <label for="username">Nom d'utilisateur</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm_password">Confirmer le mot de passe</label>
      <input type="password" id="confirm_password" name="confirm_password" required>

      <button type="submit">Créer un compte</button>

    
    </form>
    <a href="login.php" class="link">Vous avez deja un compte ? Connectez vous</a>
  </div>
</div>

<?php include 'footer.php'; ?>
