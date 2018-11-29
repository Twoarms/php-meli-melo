<?php
// Exercice 1
function itsTrue() {
    return true;
}

// Exercice 2
function write($string) {
    echo $string;
}

// Exercice 3
function whoIs($prenom, $nom) {
    echo $prenom.$nom;
}

// Exercice 4
function compare($n1, $n2) {
    if ($n1 > $n2) {
        echo "<p>Le premier nombre est plus grand.</p>";
    } elseif ($n1 < $n2) {
        echo "<p>Le premier nombre est plus petit.</p>";
    } else {
        echo "<p>Les deux nombres sont identiques.</p>";
    }
}

// Exercice 5
function concatNumString($num, $str) {
    echo $num.$str;
}

// Exercice 6
function salute($nom, $prenom, $age) {
    echo "Bonjour ".$nom." ".$prenom.", tu as ".$age." ans";
}

// Exercice 7
function statutLegal($age, $genre) {
    if ($age >= 18 && $genre == "Homme") {
        echo "Vous êtes un homme et vous êtes majeur"; 
    } elseif ($age < 18 && $genre == "Homme") {
        echo "Vous êtes un homme et vous êtes mineur";
    } elseif ($age >= 18 && $genre == "Femme") {
        echo "Vous êtes une femme et vous êtes majeure";
    } else {
        echo "Vous êtes une femme et vous êtes mineure";
    }
}

// Exercice 8
function somme($n1 = 8, $n2 = 4, $n3 = 12) {
    echo ($n1 + $n2 + $n3)."<br/>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fonctions PHP</title>
</head>
<body>

<header>
    <h1>Les fonctions en PHP</h1>
</header>

<section>
    <h2>Exercice 1</h2>
    <?php
    echo itsTrue();
    ?>
</section>

<section>
    <h2>Exercice 2</h2>
    <?php
    write("Cette fonction retourne la string qui lui sert d'argument.");
    ?>
</section>

<section>
    <h2>Exercice 3</h2>
    <?php
    whoIs("Mathieu", "Debras");
    ?>
</section>

<section>
    <h2>Exercice 4</h2>
    <?php
    compare(1, 2);
    compare(2, 1);
    compare(2, 2);
    ?>
</section>

<section>
    <h2>Exercice 5</h2>
    <?php
    concatNumString(43110, "world");
    ?>
</section>

<section>
    <h2>Exercice 6</h2>
    <?php
    echo salute("Debras", "Mathieu", 24);
    ?>
</section>

<section>
    <h2>Exercice 7</h2>
    <?php
    statutLegal(17, "Femme");
    ?>
</section>

<section>
    <h2>Exercice 8</h2>
    <?php
    somme();
    somme(2, 6, 12);
    ?>
</section>

</body>
</html>