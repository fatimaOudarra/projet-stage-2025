<?php
session_start();

$conn = new mysqli("localhost", "root", "", "site");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Vérifier si l'utilisateur عندو session
if (!isset($_SESSION['demande_id'])) {
    echo "<h2 style='color:red;'>⛔ Accès refusé. Aucune session active.</h2>";
    exit();
}

$id = intval($_SESSION['demande_id']);

$stmt = $conn->prepare("SELECT * FROM demandes WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<h2 style='color:red;'>❌ Aucune demande trouvée.</h2>";
    exit();
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Votre demande</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f7f9;
        margin: 0;
        padding: 40px 20px;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #007BFF;
        font-size: 32px;
        margin-bottom: 30px;
    }

    .container {
        max-width: 800px;
        background-color: white;
        margin: auto;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 18px;
        border-bottom: 1px solid #eee;
        padding-bottom: 8px;
    }

    .info strong {
        color: #555;
        font-weight: 600;
        width: 180px;
    }

    .info img {
        max-width: 120px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .footer-note {
        text-align: center;
        margin-top: 40px;
        color: #888;
        font-size: 14px;
    }
</style>

</head>
<body>
<div class="container">
    <h1>Détails de votre demande</h1>

    <div class="info"><strong>Nom :</strong> <?= htmlspecialchars($row['name']) ?></div>
    <div class="info"><strong>Email :</strong> <?= htmlspecialchars($row['email']) ?></div>
    <div class="info"><strong>Téléphone :</strong> <?= htmlspecialchars($row['telephone']) ?></div>
    <div class="info"><strong>Type de site :</strong> <?= htmlspecialchars($row['site_type']) ?></div>
    <div class="info"><strong>Pages :</strong> <?= htmlspecialchars($row['pages']) ?></div>
    <div class="info"><strong>Exemples :</strong> <?= nl2br(htmlspecialchars($row['examples'])) ?></div>
    <div class="info"><strong>Couleurs :</strong> <?= nl2br(htmlspecialchars($row['notes'])) ?></div>
    <div class="info"><strong>Budget :</strong> <?= htmlspecialchars($row['budget']) ?> €</div>
    <div class="info"><strong>Délai :</strong> <?= htmlspecialchars($row['delai']) ?> jours</div>

    <div class="info">
        <strong>Logo :</strong>
        <?php if ($row['logo']): ?>
            <img src="<?= $row['logo'] ?>" alt="Logo">
        <?php else: ?>
            Aucun logo fourni.
        <?php endif; ?>
    </div>

    <div class="footer-note">Merci d'avoir soumis votre demande 🙏</div>
</div>
</body>

</html>

<?php
$stmt->close();
$conn->close();
?>
