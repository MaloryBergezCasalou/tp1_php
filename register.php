<?php
try {
    include './scriptbdd.php';
    if (isset($_POST['register'])) {
        session_start();
        $username = htmlspecialchars(strtolower($_POST['username']));
        $nom = htmlspecialchars(strtolower($_POST['nom']));
        $prenom = htmlspecialchars(strtolower($_POST['prenom']));
        $age = htmlspecialchars(strtolower($_POST['age']));
        $pass_hashe = htmlspecialchars(password_hash($_POST['passwd'], PASSWORD_DEFAULT));

        if (isset($_POST['statut'])) {
            $is_entreprise = 1;
        } else {
            $is_entreprise = 0;
        }
        $_SESSION['statut'] = $is_entreprise;
        $requete1 = "INSERT INTO users(username, nom, prenom, age, passswd, statut) VALUES(?, ?, ?, ?, ?, ?)";
        $query1 = $pdo->prepare($requete1);
        $query1->execute(array($username, $nom, $prenom, $age, $pass_hashe, $is_entreprise));
        header("Location: http://localhost:8080/tp1/register.php");
    }
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

    

    <form action="register.php">
        <h1>S'enregistrer</h1>
        <p>Votre nom d'utilisateur : <input type="text" name="username" required/></p>
        <p>Votre nom : <input type="text" name="nom" required/></p>
        <p>Votre prénom : <input type="text" name="prenom" required/></p>
        <p>Votre âge : <input type="text" name="age" required/>ans</p>
        <p>Votre mot de passe : <input type="password" name="password" required/></p>


        <p>Êtes vous une entreprise :</p>
        <div class="statut">
            <input type="checkbox" id="entreprise" name="statut">
            <label for="statut">Entreprise</label>
        </div>
        <a href="index.php"><p><input type="submit" value="OK"></p></a>
    </form>
    <p><a href="login.php">Déjà membre ? <br> Connectez-vous.</a></p>

        
</body>
</html>
