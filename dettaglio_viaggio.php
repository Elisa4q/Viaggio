<!DOCTYPE html>
<?php
    $nome = $_POST["nome"]; 
    $cognome = $_POST["cognome"]; 
    $Tipo_viaggio = $_POST["Tipo_viaggio"];

    setcookie("nome", $nome, time()+60);
    setcookie("cognome", $cognome, time()+60);
    setcookie("Tipo_viaggio", $Tipo_viaggio, time()+60);
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


        <form method = "post" action = "riepilogo_viaggio.php">
            Scegli la tua destinazione:  
            <select name  = "destinazione">
                <option value = "Roma">Roma</option>
                <option value = "Tokyo">Tokyo</option>
                <option value = "Londra">Londra</option>
                <option value = "New York">New York</option>
                <option value = "Francia">Francia</option>
                <option value = "Svizzera">Svizzera</option>
                <option value = "Parigi">Parigi</option>
                <option value = "Dubai">Dubai</option>

                <form method = "post" action = "riepilogo_viaggio.php">
             Scegli il budget:  
             <select name  = "budget">
                <option value = ">15.000"> >15.000 </option>
                <option value = "tra 15.000 e 10.000">tra 15.0000 e 10.000</option>
                <option value = "tra 10.000 e 5.000">tra 10.000 e 5.000</option>
                <option value = "tra 5.000 e 2.000">tra 5.000 e 2.000</option>
                <option value = "tra 2000 e 9000">tra 2000 e 9000</option>
                <option value = "tra 900 e 300">tra 900 e 300</option>
                <option value = "inferiore a 300">inferiore a 300</option>
            
            </select>


            <form method = "post" action = "riepilogo_viaggio.php">
             Scegli il hotel:  
             <select name  = "hotel">
                <option value = "5 stelle"> 5 stelle</option>
                <option value = "4 stelle">4 stelle</option>
                <option value = "3 stelle">3 stelle</option>
                <option value = "2 stelle">2 stelle</option>
                <option value = "1 stella">1 stella</option>
                <option value = "b&b">b&b</option>
                <option value = "Appartamento">Appartamento</option>

                
                
            </select>
                
            </select>
            <input type = "submit">
    </form>
    </body>
</html>
