<?php
// Exercice 1
$count_ex1 = 0;
function counting() {
    global $count_ex1;
    while ($count_ex1 < 10) {
        echo "$count_ex1, ";
        $count_ex1++;
    }
}

// Exercice 2
$ex_21 = 0;
$ex_22 = 3;
function multipinc() {
    global $ex_21, $ex_22;
    while ($ex_21 <= 20) {
        $result = $ex_21 * $ex_22;
        echo "$result, ";
        $ex_21++;
    }
}

// Exercice 3
$ex_31 = 100;
$ex_32 = 18;
function multidec() {
    global $ex_31, $ex_32;
    while ($ex_31 > 10) {
        $result = $ex_31 * $ex_32;
        echo "$result, ";
        $ex_31--;
    }
}

// Exercice 4
$ex_4 = 1;
function halfIncr() {
    global $ex_4;
    while ($ex_4 < 10) {
        echo "$ex_4, ";
        $ex_4 += $ex_4/2;
    }
}

// Exercice 5
function on() {
    for ($i = 1; $i < 15; $i++) {
        echo "$i : On y arrive presque. ";
    }
}

// Exercice 6
function y() {
    for ($i = 20; $i > 0; $i--) {
        echo "$i : C'est presque bon. ";
    }
}

// Exercice 7
function est() {
    $n = 1;
    for ($i = 1; $i < 100; $i += 15) {
        echo "$n : On tient le bon bot. ";
        $n++;
    }
}

// Exercice 8
function enfin() {
    $n = 1;
    for ($i = 200; $i > 0; $i -= 12) {
        echo "$n : 'Ce ne sont pas les droïdes que vous recherchez.' ";
        $n++;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>boucles PHP</title>
</head>
<body>

<header>
    <h1>Les boucles en PHP</h1>
</header>

<section>
    <h2>Exercice 1</h2>
    <?php
    counting();
    ?>
</section>

<section>
    <h2>Exercice 2</h2>
    <?php
    multipinc();
    ?>
</section>

<section>
    <h2>Exercice 3</h2>
    <?php
    multidec();
    ?>
</section>

<section>
    <h2>Exercice 4</h2>
    <?php
    halfIncr();
    ?>
</section>

<section>
    <h2>Exercice 5</h2>
    <?php
    on();
    ?>
</section>

<section>
    <h2>Exercice 6</h2>
    <?php
    y();
    ?>
</section>

<section>
    <h2>Exercice 7</h2>
    <?php
    est();
    ?>
</section>

<section>
    <h2>Exercice 8</h2>
    <?php
    enfin();
    ?>
</section>
    
</body>
</html>