<?php
// inizializzare dati di sessione = booleano
session_start();
if (!isset($_SESSION["user_password"])) {
    header("Location: ./index.php");
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>La tua password</title>
</head>

<body>
    <main class="pt-4 vh-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Strong password generator</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h2 class="text-center">La tua password sicura è:</h2>
                        <div class="alert alert-success" role="alert">
                            <?php echo $_SESSION["user_password"] ?>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>
</body>

</html>