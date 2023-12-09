<!DOCTYPE html>
<?php
    $nome = $_POST["nome"]; 
    $cognome = $_POST["cognome"]; 
    $sesso = $_POST["sesso"];

    setcookie("nome", $nome, time()+60);
    setcookie("cognome", $cognome, time()+60);
    setcookie("tipo_viaggio", $tipo_viaggio, time()+60);
 ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Saluto</title>
    </head>
    <body> 
        <h1>Saluto</h1>
        <?php

        if($tipo_viaggio == "L"){//lavoro
            print("Benvenuto $nome $cognome"); 
        } else { //vacanza
            print("Benvenuta $nome $cognome");
        }
        
        ?>


        <form method = "post" action = "riepilogo_viaggio.html">
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
                
            </select>
            <input type = "submit">
    </form>
    </body>
</html>
