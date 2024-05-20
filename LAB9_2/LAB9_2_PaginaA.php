<?php
    //è necessario settare i cookies prima del codice HTML perchè altrimenti non vengono salvati (anche prima di possibili commenti HTML)
    setcookie("country", "Italia", 0, "", "", TRUE);
    //in questo caso setto i valore del cookie ad un valore prestabilito --> Italia. Scrivo il valore TRUE per indicare il valore di secure
?>


<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 9.1</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
    </head>
    <body>
        <h1>I COOKIES SONO STATI SETTATI</h1>
        <p><a href="LAB9_2_PaginaB.php">Pagina Successiva</a></p>
    </body>
</html>