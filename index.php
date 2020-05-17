<?php
try {
    include './scriptbdd.php';
    session_start();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<html>
<head>
    <title>Offres d'Emploi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./login.php">Login</a></li>
        <li><a href="./espace.php">Votre espace</a></li>
        <li><a href="./logout.php">Logout</a></li>
    </ul>
    
</body>
</html>