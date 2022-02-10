<?php

//Connexion à la base de donnée bdd axlangu

$objectPdo = new PDO('mysql:host=localhost;dbname=axlangu','root','');

//Requête d'insertion
$pdo = $objectPdo->prepare('INSERT INTO inscription VALUES (NULL, :nom, :prenom, :email, :phone, :langue_anglais, :langue_portugais, :debutant_anglais, :intermediaire_anglais, :avance_anglais, :enfant_anglais, :aide_anglais, :debutant_portugais)');

$pdo->bindValue(':nom', $_POST['name'], PDO::PARAM_STR);
$pdo->bindValue(':prenom', $_POST['firstname'], PDO::PARAM_STR);
$pdo->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$pdo->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
$pdo->bindValue(':langue_anglais', $_POST['langue_anglais'], PDO::PARAM_STR);
$pdo->bindValue(':langue_portugais', $_POST['langue_portugais'], PDO::PARAM_STR);
$pdo->bindValue(':debutant_anglais', $_POST['debutantAnglais'], PDO::PARAM_STR);
$pdo->bindValue(':intermediaire_anglais', $_POST['intermediaireAnglais'], PDO::PARAM_STR);
$pdo->bindValue(':avance_anglais', $_POST['avanceAnglais'], PDO::PARAM_STR);
$pdo->bindValue(':enfant_anglais', $_POST['enfantAnglais'], PDO::PARAM_STR);
$pdo->bindValue(':aide_anglais', $_POST['aideAnglais'], PDO::PARAM_STR);
$pdo->bindValue(':debutant_portugais', $_POST['debutantPortugais'], PDO::PARAM_STR);

//Exécution
$insert = $pdo->execute();

if($insert){
    $message = "L'étudiant a bien été ajouté dans la base de donnée";
}
else{
    $message = "Echec, l'étudiant n'a pas été ajouté dans la base de donnée";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MESSAGE :</h1>
    <p><?php echo $message; ?></p>
</body>
</html>