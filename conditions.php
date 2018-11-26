<?php
// Exercice 1
$age = 24;
function isMajor() {
    global $age;
    if ($age >= 18) {
        echo '<p>Vous êtes majeur !</p>';
    } else {
        echo '<p>Vous êtes mineur ! </p>';
    }
}

// Exercice 2
$isEasy = (bool) true;
function isIt() {
    global $isEasy;
    if ($isEasy) {
        echo "<p>C'est facile !</p>";
    } else {
        echo "<p>C'est difficile !</p>";
    }
}
$itIs = ($isEasy) ? "<p>C'est facile !</p>" : "<p>C'est difficile !</p>";

// Exercice 3
$age = 24;
$genre = "Homme";
function whoIs() {
    global $age, $genre;
    if ($genre == "Homme" && $age >= 18) {
        echo "<p>Vous êtes un homme majeur</p>";
    } elseif ($genre == "Homme" && $age < 18) {
        echo "<p>Vous êtes un homme mineur</p>";
    } elseif ($genre == "Femme" && $age >= 18) {
        echo "<p>Vous êtes une femme majeure</p>";
    } else {
        echo "<p>Vous êtes une femme mineure</p>";
    }
}

// Exercice 4
function richter($magnitude) {
    switch ($magnitude) {
        case "1":
            echo "<p>Micro-séisme impossible à ressentir.</p>";
            break;
        case "2":
            echo "<p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p>";
            break;
        case "3":
            echo "<p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p>";
            break;
        case "4":
            echo "<p>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p>";
            break;
        case "5":
            echo "<p>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p>";
            break;
        case "6":
            echo "<p>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</p>";
            break;
        case "7":
            echo "<p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p>";
            break;
        case "8":
            echo "<p>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p>";
            break;
        case "9":
            echo "<p>Séisme capable de tout détruire sur une très vaste zone.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions PHP</title>
</head>
<body>

<header>
    <h1>Les conditions en PHP</h1>
</header>

<section>
    <h2>Exercice 1</h2>
    <?php
    isMajor();
    ?>
</section>

<section>
    <h2>Exercice 2</h2>
    <?php
    isIt();
    echo $itIs;
    ?>
</section>

<section>
    <h2>Exercice 3</h2>
    <?php
    whoIs();
    ?>
</section>

<section>
    <h2>Exercice 4</h2>
    <?php
    for ($magnitude = 1; $magnitude <= 9; $magnitude++) {
        echo "<p>Niveau $magnitude</p>";
        richter($magnitude);
    }
    ?>
</section>

<section>
    <h2>Exercice 5</h2>
    <?php
    if ($maVariable != 'Homme') {
        echo "<p>C'est une développeuse !!!</p>";
    } else {
        echo "<p>C'est un développeur !!!</p>";
    }
    ?>
</section>

<section>
    <h2>Exercice 6</h2>
    <?php
    if ($monAge >= 18) {
        echo "<p>Tu es majeur</p>";
    } else {
        echo "<p>Tu n'es pas majeur</p>";
    }
    ?>
</section>

</body>
</html>