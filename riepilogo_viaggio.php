<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Riepilogo Viaggio</title>
    </head>
    <body> 
        <h1>Riepilogo</h1> 
        <?php
            session_start();

            $cognome = $_SESSION["cognome"];
            $nome = $_SESSION["nome"];
            $destinazione = $_POST["destinazione"]; 
            $budget = $_POST["budget"];
            $hotel = $_POST["hotel"];
           
        print("Buongiorno $nome $cognome siamo lieti di informala che la sua destinazione è: $destinazione
        lei ha un budget: $budget, l'hotel selezionato è un : $hotel");
         ?>

    
    </body>
</html>
