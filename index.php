<?php
/* 
Variabili esercizio numero 1
*/
// nome
$name = "Marco";
#cognome
$lastName = "Caffa";

/* 
Variabile esercizio numero 2
*/
//badword
$badword = "Badword";

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php-badwords</title>
    </head>
    <body>
        <!-- Esercizio numero 1 -->
        <h1>Ciao, mi chiamo <?php echo $name . " " . $lastName; ?></h1>

        <!-- Esercizio numero 2 -->
        <p> <?php echo str_replace("$badword", htmlspecialchars($_GET["blocco"]),  $badword . " la parola è lunga " . strlen($badword) . " lettere");?></p>

    </body>
</html>