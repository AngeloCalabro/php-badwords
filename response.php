<?php
/*
                ""	    "apple"	 NULL	FALSE	0	    undefined	    TRUE	array()	123
                ------------------------------------------------------------------------------
      isset	    TRUE	TRUE	 FALSE	TRUE	TRUE	FALSE	        TRUE	TRUE	TRUE
      empty	    TRUE	FALSE	 TRUE	TRUE	TRUE	TRUE	        FALSE	TRUE	FALSE
      is_null	FALSE	FALSE	 TRUE	FALSE	FALSE	Warning/ TRUE	FALSE	FALSE	FALSE
*/

$errore = null;
var_dump($_GET);
var_dump($_GET['frase']);

if (isset($_GET['nome']) && !empty($_GET['nome'] )) {
    $nome = $_GET['nome'];
} else {
    $nome = 'Non ho il nome';
};

// if (isset($_GET['frase']) && !empty($_GET['frase'] ))) {
//     $frase = $_GET['frase'];
// } else {
//     $frase = 'Non ho una frase';
// };

if(isset($_GET['frase']) && isset($_GET['censura'])){
    $frase = $_GET['frase'];
    $censura = $_GET['censura'];   
    $pCensored = str_replace($censura, '***', $frase);
} else {
    $errore = 'Valori non validi';
};

$fraseArray = explode(' ', $frase);
var_dump($fraseArray);

$strLenFrase = strlen($frase);
$worldLen = str_word_count($frase);

// for ($x = 0; $x < $worldLen; $x++) {
//     $pCensored = str_replace($x, '***', $x);

//     echo $pCensored;
// };

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
    <section class="container d-flex justify-content-between">
        <div>
            <!-- <?php echo "<h1>Ciao $nome</h1>" ?>
            <?php echo "<p><em>Questa è la frase che hai inserito:&nbsp;</em><br><b>$frase</b></p>" ?>
            <?php echo "<p>La tua frase ha <b>$strLenFrase</b> caratteri</p>" ?>
            <?php echo "<p>La tua frase ha <b>$worldLen</b> parole</p>" ?>
            <?php echo "<p>Questa è la parola censurata: <b>$pCensored</b></p>" ?> -->

            <?php if($errore){
                    echo "<h1>$errore</h1>";
                } else {
                    echo "<h1>Ciao $nome</h1>";
                    echo "<p><em>Questa è la frase che hai inserito:&nbsp;</em><br><b>$frase</b></p>";
                    echo "<p>La tua frase ha <b>$strLenFrase</b> caratteri</p>";
                    echo "<p>La tua frase ha <b>$worldLen</b> parole</p>";
                    echo "<p>Questa è la frase censurata: <b>$pCensored</b></p>";
                }?>
        </div>
        <div>
            <a href="./index.php">Torna alla home</a>
        </div>
    </section>
</body>

</html>