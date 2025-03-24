<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Chiffrement et Décodage de César</title>
</head>
<body>
    <h1>Chiffrement et Décodage de César</h1>
    <form action="cesar.php" method="POST" class="login-container">
        <label for="message">Message:</label>
        <input type="text" id="message" name="message" required value="<?php if(isset($_POST['message'])) echo htmlspecialchars($_POST['message']); ?>">
        <br><br>
        <label for="decalage">Décalage:</label>
        <input type="number" id="decalage" name="decalage" required value="<?php if(isset($_POST['decalage'])) echo htmlspecialchars($_POST['decalage']); ?>">
        <br><br>
        <table>
            <td>
                <tr><input type="submit" name="action" value="Chiffrer" class="res"></tr>
                
            </td>
            <td>
                <tr><tr><input type="submit" name="action" value="Déchiffrer" class="res"></tr></tr>
            </td>
        </table>
        <br><br>
        <label for="message_chiffre">Message Transformé:</label>
        <input type="text" id="message_chiffre" name="message_chiffre" readonly value="<?php if(isset($_POST['message_chiffre'])) echo htmlspecialchars($_POST['message_chiffre']); ?>">
    </form>
</body>
</html>
