<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            color: #333;
            margin: 0;
            padding: 50px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffffd9;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            max-width: 400px;
            width: 100%;
            backdrop-filter: blur(6px);
            text-align: center;
        }

        h2 {
            margin-bottom: 25px;
            color: #007BFF;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-top: 5px;
            background-color: #f9f9f9;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            border-color: #2193b0;
            outline: none;
            background-color: #fff;
        }

        button {
            margin-top: 25px;
            padding: 12px 20px;
            background: linear-gradient(to right, #2193b0, #6dd5ed);
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            transition: 0.3s ease;
        }

        button:hover {
            background: linear-gradient(to right, #6dd5ed, #2193b0);
        }

        p {
            margin-top: 30px;
            font-size: 15px;
            color: #555;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🔐 Vérification de votre demande</h2>
        <form action="check.php" method="POST">
            <label for="nom">Nom complet :</label>
            <input type="text" name="nom" id="nom" required>

            <label for="code">Code :</label>
            <input type="text" name="code" id="code" required>

            <button type="submit">🔍 Vérifier la demande</button>
        </form>

        <p>Si vous n'avez jamais soumis une demande :</p>
        <a href="index.php">📝 Remplir une nouvelle demande</a>
    </div>
</body>
</html>
