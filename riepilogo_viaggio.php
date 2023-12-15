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
            
             $Nome = $_SESSION["Nome"]; //session è un'array associativo
             $Cognome= $_SESSION["Cognome"];
             $Tipo_viaggio  = $_SESSION["Tipo_viaggio"];
             $destinazione = $_SESSION["destinazione"] = ;
            $budget= $_POST["budget"];
            $hotel = $_POST["hotel"];
            $azienda = $_POST["azienda"];
            $durata_viaggio = $_POST["durata_viaggio"];
            $num_persone = $_POST["num_persone"]; 
            $tipo_alloggio = $_POST["tipo_alloggio"];
            $attività = $_POST["attività"]; 
            
            ?>
    </body>
</html>
