<!DOCTYPE html>
<html>
<head>
    <title>Créer un utilisateur</title>
</head>
<body>      
    <form method="post" action="create_ctrl.php">
        <label>Pseudo:</label>
        <input type="text" name="pseudo" required><br>

        <label>Mot de passe:</label>
        <input type="password" name="mot_de_passe" required><br>

        <label>Description:</label>
        <textarea name="description"></textarea><br>

        <input type="submit" value="Créer">
    </form>
</body>
</html>
