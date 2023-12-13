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

            $Cognome = $_SESSION["Cognome"];
            $Nome = $_SESSION["Nome"];
            $Tipo_viaggio = $_POST["Tipo_viaggio"];
            $destinazione = $_SESSION["destinazione"]; 
            $budget = $_SESSION["budget"];
            $hotel = $_SESSION["hotel"];
            $azienda = $_SESSION["azienda"];
            $durata_viaggio = $_SESSION["durata_viaggio"]; 
            $num_persone = $_SESSION["num_persone"];
            $tipo_alloggio = $_SESSION["tipo_alloggio"];
            $attività = $_SESSION["attività"];
           
        print("Buongiorno $Nome $Cognome siamo lieti di informala che la sua destinazione è: $destinazione
        lei ha un budget: $budget, l'hotel selezionato è un : $hotel");
         ?>

    
    </body>
</html>