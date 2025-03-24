function codage(message, decalage, action) {
    let resultat = "";
    decalage = decalage % 26;
    
    if (action === "Déchiffrer") {
        decalage = 26 - decalage;
    }
    
    for (let i = 0; i < message.length; i++) {
        let caractere = message.charCodeAt(i);
        
        if (caractere >= 65 && caractere <= 90) {
            resultat += String.fromCharCode(((caractere - 65 + decalage) % 26) + 65);
        } else if (caractere >= 97 && caractere <= 122) {
            resultat += String.fromCharCode(((caractere - 97 + decalage) % 26) + 97);
        } else {
            resultat += message[i];
        }
    }
    return resultat;
}

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll("input[type=submit]").forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault();
            
            let message = document.getElementById("txt").value;
            let decalage = parseInt(document.getElementById("dec").value);
            let action = this.value;
            
            let messageChiffre = codage(message, decalage, action);
            
            document.getElementById("msg").value = messageChiffre;
        });
    });
});
