<?php 

$conn = new mysqli("localhost", "root", "", "site");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name      = $_POST["name"];
    $email     = $_POST["email"];
    $type      = $_POST["type_site"];
    $pages     = isset($_POST["pages"]) ? implode(", ", $_POST["pages"]) : "";
    $examples  = $_POST["exemples"];
    $notes     = $_POST["couleurs"];

    $logo = null;
    if (!empty($_FILES["logo"]["name"])) {
        $logo = "uploads/" . time() . "_" . basename($_FILES["logo"]["name"]);
        move_uploaded_file($_FILES["logo"]["tmp_name"], $logo);
    }

    $stmt = $conn->prepare("INSERT INTO demandes (name, email, site_type, pages, examples, notes, logo) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $type, $pages, $examples, $notes, $logo);

    if ($stmt->execute()) {
        echo "<h2 style='color:green; text-align:center;'>✅ Demande envoyée avec succès !</h2>";
    } else {
        echo "<h2 style='color:red;'>❌ Erreur : " . $stmt->error . "</h2>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<h2>⛔ Accès non autorisé.</h2>";
}


?>