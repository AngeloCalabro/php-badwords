<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
    <form action="response.php" method="GET" class="d-flex justify-content-center align-items-center">
        <div class="text-center">
            <input type="text" class="form-control m-1" name="nome" placeholder="Inserisci il tuo nome" required>
            <input type="text" class="form-control m-1 text-area" name="frase" placeholder="Inserisci una frase"
                required>
            <button type="submit" class="btn btn-primary m-1 px-3">Invia</button>
        </div>
    </form>


</body>

</html>