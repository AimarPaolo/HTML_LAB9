<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 9.1</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
    </head>
    <body>
        <?php
            if(isset($_COOKIE["country"])){
                $stato = $_COOKIE["country"];
                echo "<p>Il nome dello stato è: $stato</p>";
            }else{
                echo "<p>Il cookie non è stato settato correttamente</p>";
                echo"<p><a href='LAB9_2_PaginaA.php'>Pagina precedente</a></p>";
                //se apro prima la pagina B mi dice che i cookies non sono stati settati correttamente, appena apro con <a> la pagina precedente
                //e torno poi alla pagina B allora in quel caso mi riconosce i cookies settati!!!
            }
        ?>
    </body>
</html>