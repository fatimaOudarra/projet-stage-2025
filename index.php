<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Demande de création de site web</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<main>
    <h1>Demande de création de site web</h1>

    <form action="process.php" method="POST" enctype="multipart/form-data">

        <fieldset>
            <legend>Vos coordonnées</legend>

            <label for="nom">Nom complet :</label>
            <input type="text" name="nom" id="nom" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" name="email" id="email" required>

            <label for="telephone">Téléphone :</label>
            <input type="tel" name="telephone" id="telephone">
        </fieldset>

        <fieldset>
            <legend>Type de site souhaité</legend>

            <label for="type_site">Type de site :</label>
            <select name="type_site" id="type_site" required>
                <option value="">-- Sélectionner --</option>
                <option value="ecommerce">E-commerce</option>
                <option value="vitrine">Site vitrine</option>
                <option value="blog">Blog</option>
                <option value="autre">Autre</option>
            </select>

            <div id="autre_field" style="display:none; margin-top: 10px;">
                <label for="type_site_autre">Précisez le type de site :</label>
                <input type="text" name="type_site_autre" id="type_site_autre" placeholder="Précisez le type">
            </div>
        </fieldset>

        <fieldset>
            <legend>Pages à inclure</legend>
            <label><input type="checkbox" name="pages[]" value="Accueil"> Accueil</label><br>
            <label><input type="checkbox" name="pages[]" value="À propos"> À propos</label><br>
            <label><input type="checkbox" name="pages[]" value="Contact"> Contact</label><br>
            <label><input type="checkbox" name="pages[]" value="Boutique"> Boutique</label><br>
            <label><input type="checkbox" name="pages[]" value="Blog"> Blog</label>
        </fieldset>

        <fieldset>
            <legend>Inspiration ou exemples</legend>
            <label for="exemples">Sites que vous aimez :</label>
            <textarea name="exemples" id="exemples" rows="4" placeholder="Lien ou description..."></textarea>
        </fieldset>

        <fieldset>
            <legend>Identité visuelle</legend>

            <label for="logo">Logo ou fichiers graphiques :</label>
            <input type="file" name="logo" id="logo" accept="image/*">

            <label for="couleurs">Couleurs souhaitées / style :</label>
            <textarea name="couleurs" id="couleurs" rows="3" placeholder="Ex. Bleu foncé, style minimaliste..."></textarea>
        </fieldset>

        <fieldset>
            <legend>Informations supplémentaires</legend>

            <label for="budget">Budget estimé (€) :</label>
            <input type="number" name="budget" id="budget" min="0" step="50">

            <label for="delai">Délai souhaité (en jours) :</label>
            <input type="number" name="delai" id="delai" min="1">
        </fieldset>

        <input type="submit" value="Envoyer la demande">
    </form>
</main>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const select = document.getElementById("type_site");
    const autreDiv = document.getElementById("autre_field");
    const autreInput = document.getElementById("type_site_autre");

    function toggleField() {
        if (select.value === "autre") {
            autreDiv.style.display = "block";
            autreInput.required = true;
        } else {
            autreDiv.style.display = "none";
            autreInput.required = false;
            autreInput.value = "";
        }
    }

    select.addEventListener("change", toggleField);
});
</script>
</body>
</html>
