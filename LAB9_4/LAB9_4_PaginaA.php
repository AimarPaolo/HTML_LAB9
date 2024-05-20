<?php
    $scadenza = mktime(23,59,59,12,31,2024);
    setcookie("country", "Italia", $scadenza, "", "", TRUE);
    //facendo così i cookie rimarranno attivi fino al giorno 31 dicembre 2024 h. 23:59:59
?>


<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 9.4</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
    </head>
    <body>
        <h1>I COOKIES SONO STATI SETTATI</h1>
        <p><a href="LAB9_4_PaginaB.php">Pagina Successiva</a></p>
    </body>
</html>