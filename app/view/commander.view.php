<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Ajouter un nouveau champ de produit
        $("#ajouter-produit").click(function() {
            // Récupérer les produits déjà sélectionnés
            var produitsSelectionnes = [];
            $("select[name='produit']").each(function() {
                produitsSelectionnes.push($(this).val());
            });

            // Créer le nouvel élément de produit avec les options disponibles
            var nouvelElementProduit = '<div><label>Produit : </label><select name="produit[]" required>';
            nouvelElementProduit += '<option value="" disabled selected>Sélectionnez un produit</option>';

            // Ajouter les produits à l'option
            var produitsDisponibles = ["Pompette", "Torché", "Imbibé", "Aviné", "Éméché", "Arraché"];
            for (var i = 0; i < produitsDisponibles.length; i++) {
                if (!produitsSelectionnes.includes(produitsDisponibles[i])) {
                    nouvelElementProduit += '<option value="' + produitsDisponibles[i] + '">' + produitsDisponibles[i] + '</option>';
                }
            }

            nouvelElementProduit += '</select>';
            nouvelElementProduit += '<label> Quantité : </label><input type="number" name="quantite[]" min="1" required>';
            nouvelElementProduit += '<button class="supprimer-produit">Supprimer</button></div>';

            $("#produits").append(nouvelElementProduit);
        });

        // Supprimer un champ de produit
        $("#produits").on("click", ".supprimer-produit", function() {
            $(this).parent("div").remove();
        });
    });
</script>

<main>
    <h2>Formulaire de commande</h2>
    <form method="post" action="traitement_commande.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" placeholder="Melon" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" placeholder="Monsieur" required><br><br>

        <label for="city">Ville :</label>
        <input type="text" name="city" placeholder="Moissy-Cramayel" required><br><br>

        <label for="postal">Code postal :</label>
        <input type="number" max="99999" min="0" name="postal" placeholder="12345" required><br><br>
        <script>
            document.querySelectorAll('input[type="number"]').forEach(input => {
                input.oninput = () => {
                    if (input.value.length > 5) input.value = input.value.slice(0, 5);
                };
            });
        </script>

        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" placeholder="240 rue de la Motte" required><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" placeholder="monsieur.melon@sumail.fr" required><br><br>

        <div id="produits">
            <div>
                <label class="produits">Produits :<br></label>
                <label><strong>Arraché</strong> Quantité : </label><input name="arrache" type="number" max="20" min="0" value="0" required><br><br>
                <label><strong>Aviné</strong> Quantité : </label><input name="avine" type="number" max="20" min="0" value="0" required><br><br>
                <label><strong>Éméché</strong> Quantité : </label><input name="emeche" type="number" max="20" min="0" value="0" required><br><br>
                <label><strong>Imbibé</strong> Quantité : </label><input name="imbibe" type="number" max="20" min="0" value="0" required><br><br>
                <label><strong>Pompette</strong> Quantité : </label><input name="pompette" type="number" max="20" min="0" value="0" required><br><br>
                <label><strong>Torché</strong> Quantité : </label><input name="torche" type="number" max="20" min="0" value="0" required>
            </div>
        </div>

        <img class="submitImg" src="app/public/css/images/cart.png" alt="Icone de caddie." />
        <input class="submit" type="submit" value="Passer la commande">
    </form>

</main>