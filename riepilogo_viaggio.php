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
        

            print("Buongiorno $nome $cognome siamo lieti di comunicatrti che la tua destinazione è : $destinazione");

           
         ?>



    
    </body>
</html>
