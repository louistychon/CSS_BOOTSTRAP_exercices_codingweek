function quizz() {
    confirm("Bienvenue dans ce grand quizz du papillon !");
    confirm("Si vous répondez mal, vous devrez recommencer(rire sadique)...");
    var retVal = prompt("C'est parti? (oui/non)");
    let score = 0;
    if (retVal == "oui") {
        alert("Première question...");
    } else {
        alert("je ne force personne...");
        alert.close();
    }
    //Question 1
    var retVal = prompt("Combien d'espèces de papillons existe-t-il en Europe ? (nombre en chiffre)");
    if (retVal == "7000") {
        alert("Pas mal, tu as as bien lu");
        score += 1;
    } else {
        alert("FAUX ! Ton score est de " + score + "/5 points");
        alert.close();
    }
    //Question 2
    var retVal = prompt("Après combien de temps meurt le papillon citron ? (nombre de mois)");
    if (retVal == "10") {
        alert("Impressionnant");
        score += 1;
    } else {
        alert("Tu peux recommencer, ton score est de " + score + "/5 points");
        alert.close();
    }
    //Question 3

    var retVal = prompt("Combien de photos de chrysalides se trouvent sur ce site ? (nombre)");
    if (retVal == "1") {
        alert("C'est bien tu es attentif");
        score += 1;
    } else {
        alert("Bye Bye, ton score est de " + score + "/5 points");
        alert.close();
    }
    //Question 4

    var retVal = prompt("Quelle librairie de développement est utilisée pour ce site ? (minuscules seulement)");
    if (retVal == "bootstrap") {
        alert("wow, tu t'y connais !");
        score += 1;
    } else {
        alert("Tu n'est pas bon, ton score est de " + score + "/5 points");
        alert.close();
    }
    //Question 5
    var retVal = prompt("Combien de jour survit au maximum un papillon Belle Dame ? (nombre)");
    if (retVal == "29") {
        alert("Tu es un pro");
        score += 1;
    } else {
        alert("Pas correct, ton score est de " + score + "/5 points");
        alert.close();
    }
    //Prize

    var retVal = prompt("Tu veux connaitre ton score ? (oui/non)");
    if (retVal == "oui") {
        alert("Félicitations, ton score parfait est de " + score + " /5 points");
    } else {
        alert("ok salut");
    }
}