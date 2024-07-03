<?php include 'header.php'; ?>

<div class="form-container">
  <div class="form-box">
    <h2>Contactez-nous</h2>
    <form action="process_contact.php" method="post">
      <label for="name">Nom</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Envoyer</button>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>
