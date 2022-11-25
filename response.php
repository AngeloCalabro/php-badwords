<?php

var_dump($_GET);

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $nome = $_GET['nome'];
} else {
    $nome = 'Non ho il nome';
};

if (isset($_GET['frase']) && $_GET['frase'] != '') {
    $frase = $_GET['frase'];
} else {
    $frase = 'Non ho una frase';
};

$fraseArray = explode(' ', $frase);
var_dump($fraseArray);

$strLenFrase = strlen($frase);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Form</title>
    <!-- FRAMEWORK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <!-- CSS -->
    <link rel="stylesheet" href="./scss/style.scss">

</head>

<body>
    <section class="d-flex justify-content-between">
        <div>
            <?php echo "<h1>Ciao $nome</h1>" ?>
            <?php echo "<p><em>Questa è la frase che hai inserito:&nbsp;</em><br><b>$frase</b></p>" ?>
            <?php echo "<p>La lunghezza della tua frase è di <b>$strLenFrase</b> caratteri</p>" ?>
        </div>
        <div>
            <a href="./index.php">Torna alla home</a>
        </div>
    </section>
</body>

</html>