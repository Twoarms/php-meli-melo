<?php
// Exercice 1
function ex1() {
    if (isset($_GET['nom']) AND isset($_GET['prenom'])) {
        echo $_GET['nom']." ".$_GET['prenom'];
    } else {
        echo "Veuillez définir un nom et un prénom.";
    }
}

// Exercice 2
function ex2() {
    if (isset($_GET['age'])) {
        echo $_GET['age'];
    } else {
        echo "Veuillez définir un age.";
    }
}

// Exercice 3
function ex3() {
    if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) {
        echo $_GET['dateDebut']." ".$_GET['dateFin'];
    }
}

// Exercice 4 5 et 6
//Toujours la même chose

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paramètres d'URL PHP</title>
</head>
<body>

<header>
    <h1>Les paramètres d'URL en PHP</h1>
</header>

<section>
    <h2>Exercice 1</h2>
    <?php
    ex1();
    ?>
</section>

<section>
    <h2>Exercice 2</h2>
    <?php
    ex2();
    ?>
</section>

<section>
    <h2>Exercice 3</h2>
    <?php
    ex3();
    ?>
</section>


    <!-- Le reste c'est la même-->

    
</body>
</html>