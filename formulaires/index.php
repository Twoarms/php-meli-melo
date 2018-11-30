<?php
function lastForm () {
    if (isset($_POST['name3']) AND isset($_POST['firstname3']) AND (isset($_POST['gender']))) {
        if (isset($_FILES['upldFile']['name'])) {
            $file = $_FILES['upldFile']['name'];
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $ext = pathinfo($file, PATHINFO_EXTENSION);
        }
        if ($ext != "pdf") {
            return "<h2>Exercice 5</h2>Le fichier envoyé n'est pas un pdf.";
        }
        return "<h2>Exercice 5</h2>Nom : ".$_POST['name3']."<br/>Prénom : ".$_POST['firstname3']."<br/>H/F ? ".$_POST['gender']."<br/>Nom du fichier :".$filename."<br/>Extension du fichier : ".$ext;
    } else {
        return '<section>
        <h2>Exercice 5</h2>
        <form action="index.php" method="post" enctype="multipart/form-data">
            Genre :
            <select name="gender">
                <option value="male">Homme</option>
                <option value="female">Femme</option>
            </select><br/>
            Nom : <input type="text" name="name3" required><br/>
            Prenom : <input type="text" name="firstname3" required><br/>
            Choisir fichier : <input type="file" name="upldFile"><br/>
            <input type="submit">
        </form>
    </section>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaires PHP</title>
</head>
<body>

<header>
    <h1>Les formules en PHP</h1>
</header>

<section>
    <h2>Exercice 1</h2>
    <form action="user.php" method="get">
        Nom : <input type="text" name="name1" required><br/>
        Prénom : <input type="text" name="firstname1" required><br/>
        <input type="submit"> 
    </form>
</section>

<section>
    <h2>Exercice 2</h2>
    <form action="user.php" method="post">
        Nom : <input type="text" name="name2" required><br/>
        Prénom : <input type="text" name="firstname2" required><br/>
        <input type="submit">
    </form>
</section>

<!-- <section>
    <h2>Exercice 5</h2>
    <form action="index.php" method="post">
        Genre :
        <select name="gender">
            <option value="male">Homme</option>
            <option value="female">Femme</option>
        </select><br/>
        Nom : <input type="text" name="name3" required><br/>
        Prenom : <input type="text" name="firstname3" required><br/>
        <input type="submit">
    </form>
</section> -->
<?php
echo lastForm();
?>

</body>
</html>