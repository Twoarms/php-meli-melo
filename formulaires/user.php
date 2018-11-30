<?php

function whoIsGet () {
    if (isset($_GET['name1']) AND isset($_GET['firstname1'])) {
        $nom = $_GET['name1'];
        $prenom = $_GET['firstname1'];
        echo "<p>Bonjour ".$nom." ".$prenom." !</p>";
    }
}


function whoIsPost () {
    if (isset($_POST['name2']) AND isset($_POST['firstname2'])) {
        $nom = $_POST['name2'];
        $prenom = $_POST['firstname2'];
        echo "<p>Bonjour ".$nom." ".$prenom." !</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">-
    <meta name="viewport" content="width=-, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaires PHP</title>
</head>
<body>
    <?php
    whoIsGet();
    whoIsPost();
    ?>
    
</body>
</html>