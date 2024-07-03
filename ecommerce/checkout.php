<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<main class="center-content">
    <section class="checkout">
        <div class="container">
            <h2>Informations de Livraison</h2>
            <form action="process_payment.php" method="POST">
                <div class="form-group">
                    <label for="fullname">Nom complet</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="address">Adresse</label>
                    <input type="text" id="address" name="address" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                </div>

                <h2>Mode de Paiement</h2>
                <div class="payment-options">
                    <label><input type="radio" name="payment_method" value="credit_card" required> Carte de crédit</label>
                    <label><input type="radio" name="payment_method" value="m_pesa" required> M-Pesa</label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Payer</button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
