<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec balise select</title>
</head>
<body>
    <form action="traitement_formulaire.php" method="post">
        <select name="choix">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>


<?php
// traitement_formulaire.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $choix = $_POST['choix'];

    // Connexion à la base de données 
    $dsn = 'mysql:host=localhost;dbname=votre_base_de_donnees;charset=utf8';
    $user = 'votre_utilisateur';
    $password = 'votre_mot_de_passe';

    try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insérez le choix dans la table (par exemple, "choix_utilisateurs")
        $sql = "INSERT INTO choix_utilisateurs (choix) VALUES (:choix)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['choix' => $choix]);

        echo "Choix enregistré avec succès !";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
