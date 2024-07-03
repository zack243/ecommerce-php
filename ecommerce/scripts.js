document.addEventListener("DOMContentLoaded", () => {
  const addToCartButtons = document.querySelectorAll(".add-to-cart");
  addToCartButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      const productId = e.target.dataset.id;
      // Ajouter le produit au panier en utilisant AJAX
      fetch("add_to_cart.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({ id: productId }),
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            alert("Produit ajouté au panier");
          } else {
            alert("Erreur lors de l'ajout au panier");
          }
        });
    });
  });
});
