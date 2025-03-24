
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Chiffrement et Décodage de César</title>
</head>

<body>
    <header>
        <h1>Chiffrement avec le code de cesar</h1>
    </header>
    <form action="cesar_codeCpu.php" method="POST" class="login-container">
        <h1><marquee behavior="" direction="">Codage || Décodage</marquee></h1>
        <div>
            <label for="txt" class="mod">Entrer votre message:</label>
            <input type="text" id="txt" name="txt" placeholder="<?php if (isset($_POST['txt'])) echo htmlspecialchars($_POST['txt']); ?>" required>
        </div>
        <br>
        <div>
            <label for="dec" class="mod"> Entrer le décalage:</label>
            <input type="number" id="dec" name="dec" min="1" max="3" placeholder="<?php if (isset($_POST['dec'])) echo htmlspecialchars($_POST['dec']); ?>" required>
        </div>
        <br>
        <div>
            <table>
                <td>
                    <tr>
                        <input type="submit" name="action" value="Chiffrer" class="res">
                    </tr>

                </td>
                
                <td>
                    <tr>
                        <input type="submit" name="action" value="Déchiffrer" class="res">
                    </tr>
                </td>
            </table>
        </div>
        <br>
        <div>
            <label for="msg" class="mod">Resultat attendu:</label>
            <input type="text" id="msg" name="msg" readonly value="<?php if (isset($_POST['msg'])) echo htmlspecialchars($_POST['msg']); ?>">
        </div>
    </form>
</body>

</html>