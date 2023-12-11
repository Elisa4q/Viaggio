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
            $Nome = $_POST["Nome"]; //_POST è un array associativo predefinito in PHP
            $Cognome = $_POST["Cognome"]; 
            $Tipo_viaggio = $_POST["Tipo_viaggio"];
           

            $_SESSION["Nome"] = $Nome; //session è un'array associativo
            $_SESSION["Cognome"] = $Cognome;
            $_SESSION["Tipo_viaggio"] = $Tipo_viaggio;

        if($Tipo_viaggio == "L"){//Lavoro
            print("Il tuo viaggio è per: $Tipo_viaggio"); 
           
        } else { //Vacanza
            print("Il tuo viaggio è per: $Tipo_viaggio");
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
            <input type = "submit">
    </form>
    </body>
</html>
