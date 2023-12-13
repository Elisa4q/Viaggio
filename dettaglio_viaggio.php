<!DOCTYPE html>
<?php
    $Nome = $_POST["Nome"]; 
    $Cognome = $_POST["Cognome"]; 
    $Tipo_viaggio = $_POST["Tipo_viaggio"];
    $destinazione = $_POST["destinazione"] ;
    $budget = $_POST["budget"];
    $hotel = $_POST["hotel"];
    $azienda = $_POST["azienda"];
    $durata_viaggio = $_POST["durata_viaggio"];
    $num_persone = $_POST["num_persone"]; 
    $tipo_alloggio = $_POST["tipo_alloggio"];
    $attività = $_SESSION["attività"];

    setcookie("Nome", $Nome, time()+60);
    setcookie("Cognome", $Cognome, time()+60);
    setcookie("Tipo_viaggio", $Tipo_viaggio, time()+60);
    setcookie("destinazione", $destinazione, time()+60);
    setcookie("budget", $budget, time()+60);
    setcookie("hotel", $hotel, time()+60); 
    setcookie("azienda", $azienda, time()+60); 
    setcookie("durata_viaggio", $durata_viaggio, time()+60);
    setcookie("num_persone", $num_persone, time()+60); 
    setcookie("tipo_alloggio", $tipo_alloggio, time()+60); 
    setcookie("attività", $attività, time()+60);
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Saluto</title>
    </head>
    <body> 
        <h1>Saluto</h1>
        <?php

        if($Tipo_viaggio == "L"){//lavoro
            print("Benvenuto $nome $cognome"); 
        } else { //vacanza
            print("Benvenuta $nome $cognome");
        }
        
        ?>


if($Tipo_viaggio == "L") { //lavoro
            
            print("<form method = 'post' action = 'riepilogo_viaggio.php'>");
            print("<input type = 'text' value = 'inserisci il nome dell'azienda' name = 'azienda'> <br><br>");

            print("Scegli il budget: ");
            print("<select name  = 'budget'>");
            print("<option value = '>15.000'> >15.000 </option>");
            print("<option value = 'tra 15.000 e 10.000'>tra 15.0000 e 10.000</option>");
            print("<option value = 'tra 10.000 e 5.000'>tra 10.000 e 5.000</option>");
            print("<option value = 'tra 5.000 e 2.000'>tra 5.000 e 2.000</option>");
            print("option value = 'tra 2.000 e 900'> tra 2.000 e 900</option>");
            print("<option value = 'tra 900 e 300'>tra 900 e 300</option>");
            print("<option value = 'inferiore a 300'>inferiore a 300</option>");

           
            print("scegli la durata del viaggio: ");
            print("<option value = '1 mese'> 1 mese</option>");
            print("<option value = '2 settimane'> 2 settimane</option>");
            print("<option value = '1 settimana'>1 settimana</option>");
            print("<option value = '5 giorni'>5 giorni</option>");
            print("<option value = '4 giorni>4 giorni</option>");
            print("<option value = '3 giorni'>3 giorni</option>");
            print("<option value = '2 giorni'>2 giorni</option>");

            

            
            // ...
        } else { //vacanza
           
            print("<form method = 'post' action = 'riepilogo_viaggio.php'>");
            print("<input type = 'text' value = 'inserisci il numero di persone' name = 'num_persone'> <br><br>");
            print("<input type = 'text' value = 'inserisci attività' name = 'attività'> <br><br>");

            print("Scegli il tipo_alloggio: ");
            print("<option value = '5 stelle'>5 stelle</option>");
            print("<option value = '4 stelle'>4 stelle</option>");
            print("<option value = '3 stelle'>3 stelle</option>");
            print("<option value = '2 stelle'>2 stelle</option>");
            print("<option value = '1 stella'>1 stella</option>");
            print("<option value = 'b&b'>b&b</option>");
            print("<option value = 'Appartamento'>Appartamento</option>");



        };
