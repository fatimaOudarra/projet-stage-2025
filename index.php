<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demande de création de site web</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Formulaire de demande de création de site web</h1>

    <form action="process.php" method="POST" enctype="multipart/form-data">
        <!-- Type de site -->
        <label for="type_site">Type de site :</label>
        <select name="type_site" id="type_site" required>
            <option value="">-- Sélectionner --</option>
            <option value="ecommerce">E-commerce</option>
            <option value="vitrine">Site vitrine</option>
            <option value="blog">Blog</option>
            <option value="autre">Autre</option>
        </select>
        <br><br>

        <!-- Pages souhaitées -->
        <label>Pages souhaitées :</label><br>
        <input type="checkbox" name="pages[]" value="Accueil"> Accueil<br>
        <input type="checkbox" name="pages[]" value="À propos"> À propos<br>
        <input type="checkbox" name="pages[]" value="Contact"> Contact<br>
        <input type="checkbox" name="pages[]" value="Boutique"> Boutique<br>
        <input type="checkbox" name="pages[]" value="Blog"> Blog<br>
        <br>

        <!-- Sites appréciés -->
        <label for="exemples">Exemples de sites appréciés :</label>
        <textarea name="exemples" id="exemples" rows="4" cols="50" placeholder="Lien ou description..."></textarea>
        <br><br>

        <!-- Upload logo -->
        <label for="logo">Logo ou fichiers graphiques :</label>
        <input type="file" name="logo" id="logo" accept="image/*">
        <br><br>

        <!-- Couleurs et préférences -->
        <label for="couleurs">Couleurs préférées ou autres détails :</label>
        <textarea name="couleurs" id="couleurs" rows="3" cols="50" placeholder="Ex. Bleu foncé et blanc, style moderne..."></textarea>
        <br><br>

        <!-- Bouton submit -->
        <input type="submit" value="Envoyer la demande">
    </form>
</body>
</html>
