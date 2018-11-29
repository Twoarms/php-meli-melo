<?php
// Exercice 1
$mois = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");

// Exercice 2
function months() {
    global $mois;
    echo "$mois[2]<br/>";
    echo "$mois[5]";
    $mois[7] = "août";
}

// Exercice 3
$departements = array(01 => "Ain", 03 => "Allier", 07 => "Ardèche", 15 => "Cantal", 26 => "Drôme", 38 => "Isère", 42 => "Loire", 43 => "Haute-Loire", 63 => "Puy-de-Dôme", 69 => "Rhône", 73 => "Savoie", 74 => "Haute-Savoie");
function resolve3() {
    global $departements;
    echo "<p>$departements[69]</p>";
    $departements[57] = "Moselle";
    foreach ($departements as $key => $value) {
        echo "Le département ".$value." a le numéro ".$key."<br/>";
    }
}

// Exercice 4
$prenoms = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
function sendMail() {
    global $prenoms;
    foreach ($prenoms as $value) {
        echo "Salut $value, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)<br/>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux PHP</title>
</head>
<body>

<header>
    <h1>Les tableaux en PHP</h1>
</header>

<section>
    <h2>Exercice 2</h2>
    <?php
    months();
    ?>
</section>

<section>
    <h2>Exercice 3</h2>
    <?php
    resolve3();
    ?>
</section>

<section>
    <h2>Exercice 4</h2>
    <?php
    sendMail();
    ?>
</section>
    
</body>
</html>