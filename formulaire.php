<?php 
    include_once("./src/connect_bdd.inc.php")
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="plagiatInsta" content="Copie Page Instagram">
    <title>Ax'langu</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>

<main class="pageAccueil">

    <section>
        <p class="verify"> Mot de passe ou adresse mail incorrect ! </p>

        <form name="inscritpion" action="./main_page.html" method="get">
            <input name="name" id="name" placeholder="Indiquez votre nom" type="text">
            <input name="firstname" id="firstname" placeholder="Indiquez votre prénom" type="text">
            <input name="email" id="adressMail" placeholder="Indiquez votre adresse mail">
            <input name="phone" id="phone" placeholder="Indiquez votre numéro de téléphone" type="text">

            <select name="language" id="language-select">
                <option value="">Choissiez une langue</option>
                <option value="1">Anglais</option>
                <option value="2">Portugais</option>
            </select>
            <select name="language" id="niv-portu">
                <option value="">Choissiez le niveau souhaité</option>
                <option value="1">Niveau A1-A2</option>
            </select>
            <select name="level" id="level-select">
                <option value="">Choissez le niveau souhaité</option>
                <option value="1">Niveau A1-A2</option>
                <option value="2">Niveau B1-B2</option>
                <option value="3">Niveau C1-C2</option>
                <option value="4">Enfant</option>
            </select>
            <select name="hourBeginner" id="niv-AB1AB2">
                <option value="">Choissez le créneau horaire</option>
                <option value="vendrediBefore">Vendredi avant le culte</option>
                <option value="dimancheAfter">Dimanche après le culte</option>
            </select>
            <select name="hourBeginner" id="niv-C1C2">
                <option value="">Choissez le créneau horaire</option>
                <option value="vendrediBefore">Dimanche avant le culte</option>
            </select>
            <select name="hourBeginner" id="niv-child">
                <option value="">Choissez le créneau horaire</option>
                <option value="vendrediBefore">Dimanche après le culte</option>
            </select>
            <input type="submit" value="Envoyer" class="btn_send">
        </form>
    </section>
    

</main>

<script src="./js/formulaire.js">
</script>
</body>
</html>