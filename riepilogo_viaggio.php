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

            $Cognome = $_COOKIE["Cognome"];
            $Nome = $_COOKIE["Nome"];
            $Tipo_viaggio = $_COOKIE["Tipo_viaggio"];
            $destinazione = $_COOKIE["destinazione"]; 
            $budget = $_COOKIE["budget"];
            $hotel = $_COOKIE["hotel"];
            $azienda = $_COOKIE["azienda"];
            $durata_viaggio = $_COOKIE["durata_viaggio"]; 
            $num_persone = $_COOKIE["num_persone"];
            $tipo_alloggio = $_COOKIE["tipo_alloggio"];
            $attività = $_COOKIE["attività"];
           
        print("Buongiorno $Nome $Cognome siamo lieti di informala che la sua destinazione è: $destinazione
        lei ha un budget: $budget, l'hotel selezionato è un : $hotel");
         ?>

    
    </body>
</html>