<?php
session_start();
$conn = new mysqli("localhost", "root", "", "site_requests");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

$nom = $_POST['nom']; 
$code = $_POST['code']; 


$stmt = $conn->prepare("SELECT id FROM demandes WHERE name = ? AND code = ?");
$stmt->bind_param("ss", $nom, $code);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $_SESSION['demande_id'] = $row['id'];
    header("Location: voir.php");
    exit();
} else {
    echo "<h2 style='color:red; text-align:center;'>❌ Aucune demande trouvée avec ces informations.</h2>";
    echo "<p style='text-align:center;'><a href='accueil.php'>🔙 Retour à l'accueil</a></p>";
}

$stmt->close();
$conn->close();
?>
