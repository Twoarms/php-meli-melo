<?php
// Exercice 1
function getUserAgent () {
    return $_SERVER['HTTP_USER_AGENT'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions PHP</title>
</head>
<body>

<header>
    <h1>Variables superglobales, sessions et cookies</h1>
</header>

<section>
    <h2>Exercice 1</h2>
    <p>Votre User Agent est : <?php echo getUserAgent();?></p>
</section>
    
</body>
</html>