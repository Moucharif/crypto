<?php
function codage($message, $decalage, $action)
{
    //Déclaration des variable
    $resultat = '';
    $decalage = $decalage % 26;
    //Vérifions s'il s'agit d'un chiffrement ou d'un déchiffrement
    if ($action == 'Déchiffrer') {
        $decalage = 26 - $decalage;
    }
    //Début de l'opération 
    for ($i = 0; $i < strlen($message); $i++) {
        //Conversion de la lettre en code ASCII
        $caractere = ord($message[$i]);
        if ($caractere >= 65 && $caractere <= 90) {
            //Reconversion du code ASCII en ajoutant le décalage après vérifier s'il s'agit d'une lettre minuscule
            $resultat .= chr((($caractere - 65 + $decalage) % 26) + 65);
        } elseif ($caractere >= 97 && $caractere <= 122) {
            //Reconversion du code ASCII en ajoutant le décalage après vérifier s'il s'agit d'une lettre majuscule
            $resultat .= chr((($caractere - 97 + $decalage) % 26) + 97);
        } else {
            $resultat .= $message[$i];
        }
    }
    return $resultat;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Recherche des informations
    $message = $_POST['txt'];
    $decalage = $_POST['dec'];
    $action = $_POST['action'];
    //Appel de la fonction
    $message_chiffre = codage($message, $decalage, $action);
    $_POST['msg'] = $message_chiffre;
    //Connexion avec la page principale
    include('cesar_code.php');
}
