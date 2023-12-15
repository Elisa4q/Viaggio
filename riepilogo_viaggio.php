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
            
            $_SESSION["Nome"] = $Nome; //session è un'array associativo
            $_SESSION["Cognome"] = $Cognome;
            $_SESSION["Tipo_viaggio"] = $Tipo_viaggio;
            $_SESSION["destinazione"] = $destinazione;
            $_SESSION["budget"] = $budget;
            $_SESSION["hotel"] = $hotel;
            $_SESSION["azienda"] = $azienda;
            $_SESSION["durata_viaggio"] = $durata_viaggio;
            $_SESSION["num_persone"] = $num_persone; 
            $_SESSION["tipo_alloggio"] = $tipo_alloggio;
            $_SESSION["attività"] = $attività;
            
            ?>
    </body>
</html>