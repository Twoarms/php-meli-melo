<?php
// Exercice 1
$nom = "Debras";
$prenom = "Mathieu";
$age = 24;

// Exercice 2
$km = 1;

// Exercice 3
$string = (string) "une valeur de votre choix";
$int = (int) 7;
$float = (float) 66.6;
$bool = (bool) true;

// Exercice 4
$int2 = (int) null;

// Exercice 5
$addition = 3 + 4;
$multiplication = 5 * 20;
$division = 45/5;

// Exercice 6
$prix = 785;
$solde = 30 / 100;
$reduction = $prix * $solde;
$prix_final = $prix - $reduction;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables php</title>
</head>
<body>

<header>
    <h1>Les variables en PHP</h1>
</header>

<section>
    <h2>Exercice 1</h2>
    <?php
    echo "<p>Bonjour $prenom, enfant de la famille $nom ayant atteint le level $age !</p>";
    ?>
</section>

<section>
    <h2>Exercice 2</h2>
    <?php
    echo "<p>$km</p>";
    $km = 3;
    echo "<p>$km</p>";
    $km = 125;
    echo "<p>$km</p>";
    ?>
</section>

<section>
    <h2>Exercice 3</h2>
    <?php
    echo "<p>La string est '$string'.</p>";
    echo "<p>L'int est '$int'.</p>";
    echo "<p>Le float est '$float'.</p>";
    echo "<p>Le booléen est '$bool'.</p>";
    ?>
</section>

<section>
    <h2>Exercice 4</h2>
    <?php
    echo "<p>La variable vaut '$int2'</p\n";
    $int2 = 9;
    echo "<p>La variable vaut '$int2'</p>";
    ?>
</section>

<section>
    <h2>Exercice 5</h2>
    <?php
    echo "<p>Le résultat de l'addition est '$addition'.</p><p>Le résultat de la multiplication est '$multiplication'.</p><p>Le résultat de la division est '$division'</p>";
    ?>
</section>

<section>
    <h2>Exercice 6</h2>
    <?php
    echo "<p> Le prix initial est de $prix €, la réduction accordée vaut $reduction € et le prix final est de $prix_final €</p>"
    ?>
</section>

</body>
</html>