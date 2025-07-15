<?php
session_start();
$conn = new mysqli("localhost", "root", "", "site_requests");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $type = $_POST["type_site"];
    $pages = isset($_POST["pages"]) ? implode(", ", $_POST["pages"]) : "";
    $examples = $_POST["exemples"];
    $notes = $_POST["couleurs"];
    $budget = $_POST["budget"];
    $delai = $_POST["delai"];

    if ($type === "autre" && !empty($_POST["type_site_autre"])) {
        $type = $_POST["type_site_autre"];
    }

    $logo = null;
    if (!empty($_FILES["logo"]["name"])) {
        $logo = "uploads/" . time() . "_" . basename($_FILES["logo"]["name"]);
        move_uploaded_file($_FILES["logo"]["tmp_name"], $logo);
    }

 
    $code = substr(md5(uniqid(mt_rand(), true)), 0, 6);

    $stmt = $conn->prepare("INSERT INTO demandes 
        (name, email, telephone, site_type, pages, examples, notes, logo, budget, delai, code) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssssis", $name, $email, $telephone, $type, $pages, $examples, $notes, $logo, $budget, $delai, $code);

    if ($stmt->execute()) {
        $id = $stmt->insert_id;
        $_SESSION['demande_id'] = $id;

        echo "
        <div style='text-align:center; margin-top:50px;'>
            <h2 style='color:green;'>✅ Demande envoyée avec succès !</h2>
            <p>Votre code : <strong>$code</strong> (Gardez-le pour consulter votre demande)</p>
            <p><a href='voir.php' style='font-size:18px; color:#007BFF;'>👉 Voir les informations envoyées</a></p>
        </div>";
    } else {
        echo "<h2 style='color:red;'>❌ Erreur : " . $stmt->error . "</h2>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<h2 style='color:red;'>⛔ Accès non autorisé.</h2>";
}
?>
