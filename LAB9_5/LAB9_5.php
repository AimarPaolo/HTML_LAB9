<?php
    $form_received=false;
    if(isset($_REQUEST["nome"]) && isset($_REQUEST["cognome"]) && $_REQUEST["nome"] != "" && $_REQUEST["cognome"] != "" && preg_match('/^[A-Z][a-z]{0,29}$/',$_REQUEST["nome"]) && preg_match('/^[A-Z][a-z]{0,29}$/',$_REQUEST["cognome"])){
        //se rispetta le seguenti condizioni allora posso settare i cookies e tenere in memoria i dati... 
        //utilizzo preg_match per controllare che il form rispetti le condizioni della regexp
        $expire = time() + 3600;  //setto la scadenza a 3600 secondi dopo quella in cui vengono settati
        $nome = $_REQUEST["nome"];
        $cognome = $_REQUEST["cognome"];
        $form_received=true;

        setcookie("name", $nome, $expire, "", "",TRUE);
        setcookie("cognomeee", $cognome, $expire, "", "",TRUE);
    }
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 9.5</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">  
    </head>
    <body>
        <?php
            if(isset($_COOKIE["name"]) && isset($_COOKIE["cognomeee"]) && $form_received){
                echo "<p>Benvenuto caro ".$_COOKIE["name"] . " " . $_COOKIE["cognomeee"] . " nel mio umile sito</p>";
                echo "<p>La parola ciao è una delle più comuni saluti informali in italiano, ma ha origini piuttosto insolite.
                Deriva dal termine veneziano s'ciavo, 
               che a sua volta viene dal latino sclavus, significando schiavo o servo. 
               In origine, s'ciavo era un modo di dire \"sono il tuo servo\" o \"sono a tua disposizione\" in segno di 
               cortesia e rispetto. Col passare del tempo, la parola ha perso il suo significato letterale di schiavitù 
               ed è diventata un semplice saluto amichevole.</p>";
            }
            else{
                   echo "<p> ERRORE: Non ti sei registrato oppure la tua registrazione non è avvenuta in modo corretto. </p>";
                   echo "<p><a href='lab9_5.html'> Vai alla pagina di registrazione </a></p>";
            }
            echo "<p><a href='lab9_5_home.html'> Torna alla home </a></p>";
        ?>
    </body>
</html>