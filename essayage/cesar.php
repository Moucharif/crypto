<?php
function codage($message, $decalage, $action) {
    $resultat = '';
    $decalage = $decalage % 26;
    if ($action == 'Déchiffrer') {
        $decalage = 26 - $decalage;
    }
    for ($i = 0; $i < strlen($message); $i++) {
        $caractere = ord($message[$i]);
        if ($caractere >= 65 && $caractere <= 90) {
            $resultat .= chr((($caractere - 65 + $decalage) % 26) + 65);
        } elseif ($caractere >= 97 && $caractere <= 122) {
            $resultat .= chr((($caractere - 97 + $decalage) % 26) + 97);
        } else {
            $resultat .= $message[$i];
        }
    }
    return $resultat;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];
    $decalage = $_POST['decalage'];
    $action = $_POST['action'];
    $message_chiffre = codage($message, $decalage, $action);
    // Afficher le message transformé et conserver les informations saisies
    $_POST['message_chiffre'] = $message_chiffre;
    include('essaies.php');
}
