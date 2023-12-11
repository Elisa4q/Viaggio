<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>dettaglio prenotazione</title>
    </head>
    <body> 
        <h1>prenotazione</h1>
        <?php
            session_start();
            $nome = $_POST["nome"]; //_POST è un array associativo predefinito in PHP
            $cognome = $_POST["cognome"]; 
            $tipo_viaggio = $_POST["tipo_viaggio"];
           

            $_SESSION["nome"] = $nome; //session è un'array associativo
            $_SESSION["cognome"] = $cognome;
            $_SESSION["tipo_viaggio"] = $tipo_viaggio;

        if($tipo_viaggio == "L"){//Lavoro
            print("Il tuo viaggio è per: $tipo_viaggio"); 
           
        } else { //Vacanza
            print("Il tuo viaggio è per: $tipo_viaggio");
        }

        
        ?>

        <form method = "post" action = "riepilogo_viaggio.php">
            Scegli la tua destinazione:  
            <select name  = "destinazione">
                <option value = "Roma">Roma</option>
                <option value = "Tokyo">Tokyo</option>
                <option value = "Londra">Londra</option>
                <option value = "Francia">Francia</option>
                <option value = "Svizzera">Svizzera</option>
                <option value = "Parigi">Parigi</option>
                <option value = "Dubai">Dubai</option>
                
            </select>

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
            <input type = "submit">
    </form>
    </body>
</html>
