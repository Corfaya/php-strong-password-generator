<?php
// controllo esistenza del dato
if (isset($_GET["length"]) && $_GET["length"] >= 8) {
    // trasformare stringa in integer
    $lengthToInt = (int)$_GET["length"];
    // funzione per generare la password della lunghezza richiesta
    function pwGenerator($lengthToInt) {
        // variabile password da riempire + variabile caratteri
        $password = "";
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789,;.:-_'?!£$%&/\|=éèàòù[]@ç#°§<>";
        // iterazione per la lunghezza impostata dall'utente
        for ($k = 0; $k < $lengthToInt; $k++) {
            // rand method: genera numero random tra 0 e lunghezza stringa $char - 1 (pescaggio index)
            $password .= $chars[rand(0, strlen($chars) - 1)];
        }
        var_dump($password);
        return $password;
    }
    $pw = pwGenerator($lengthToInt);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password Generator PHP</title>
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
                    <div class="form-box rounded p-5 mt-4">
                        <form action="./index.php" methods="GET">
                            <div class="col-12">
                                <h2 class="text-center">Genera una password sicura</h2>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-5">
                                    <label class="fw-bolder fs-5 mb-3" for="length">Scegli la lunghezza della tua password</label>
                                    <input class="form-control form-control-sm mw-50" type="number" min="8" max="18" name="length" id="length" placeholder="Seleziona una lunghezza tra 8 e 18" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="mt-3">Invia</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
</body>

</html>