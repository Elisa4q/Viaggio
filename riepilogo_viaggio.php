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

            $cognome = $_SESSION["cognome"];
            $nome = $_SESSION["nome"];
            $destinazione = $_POST["destinazione"]; 

        
            if($tipo_viaggio == "L") { //lavoro
                print("Buongiorno $nome $cognome, siamo lieti di comunicarti che la vostra destinazione è: $destinazione
                la vostra azienda è: $nome_azienda, hai un budget di: $budget, il vostro viaggio dura: $durata_viaggio 
                infine la vostra destinazione è: $destinazione");
            }
             else { //vacanza
                print("Buongiorno $nome $cognome, siamo lieti di comunicarti che la vostra destinazione è: $destinazione
                sarete in $n_persone persone, l'alloggio da voi selezionato è $tipo_alloggio 
                infine l'attività che avete selezinato è $tipo_attività");
             }

           
        
         ?>



    
    </body>
</html>
