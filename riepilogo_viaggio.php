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


if($tipo_viaggio == "lavoro"){
print("Benvenuto $Nome $Cognome, siamo lieti di informarla che il suo viaggio è per $tipo_viaggio
    la destinazione da lei selezionata è $destinazione
    la sua azienda è $azienda, lei ha un budget di $budget,
    il suo viaggio dura $durata_viaggio");
    } else {
    print("Benvenuto $Nome $cognome, siamo leiti di infomarla che il suo viaggio è per $tipo_viaggio
    la destinazione da lei selezionata è $destinazione, 
    siete in $num_persone persone, 
    come alloggio avete selezionato un $tipo_aloggio, infine come attività interessante 
    avete inserito $attività interessante");
    };

            ?>
    </body>
</html>
