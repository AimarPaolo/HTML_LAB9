<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 9.1</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
    </head>
    <body>
        <?php 
            $url= "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
            $browser = $_SERVER["HTTP_USER_AGENT"];
            $ip = $_SERVER["REMOTE_ADDR"];
            $nomeServer = $_SERVER["SERVER_NAME"];
            $ipServer = $_SERVER["SERVER_ADRESS"];
            $porta = $_SERVER["REMOTE_PORT"];
            echo "Benvenuto, 
            hai richiesto la pagina $url usando i metodi \$_SERVER[\"SERVER_NAME\"] e \$_SERVER[\"REQUEST_URI\"] \n
            Stai usando il browser $browser dal nodo con indirizzo IP $ip . \n
            Sei collegato al server $nomeServer (indirizzo IP $ipServer e porta $porta/TCP).";
        ?>
    </body>
</html>