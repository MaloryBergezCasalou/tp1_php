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
    <title>Connectez vous</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./login.php">Login</a></li>
        <li><a href="./espace.php">Votre espace</a></li>
        <li><a href="./logout.php">Logout</a></li>
    </ul>


    <form action="login.php" method="post">
        <h1>S'identifier</h1>
        <p>Votre nom d'utilisateur : <input type="text" name="username" required/></p>
        <p>Votre mot de passe : <input type="password" name="password" required/></p>
        <p><input type="submit" value="OK"></p>
    </form>
    <p><a href="register.php">Pas de compte ? <br> Inscrivez-vous.</a></p>


        
</body>
</html>