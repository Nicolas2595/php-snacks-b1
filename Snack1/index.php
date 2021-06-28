<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>snack1</title>
    </head>
    <body>

        <?php

            /*
            ## Snack 1
            Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
            Olimpia Milano - Cantù | 55-60
            */

            $partite = [
                [
                    "squadra_casa" => "Fortitudo",
                    "squadra_ospite" => "Brindisi",
                    "punti_casa" => 99,
                    "punti_ospite" => 80,
                ],
                [
                    "squadra_casa" => "Virtus",
                    "squadra_ospite" => "Milano",
                    "punti_casa" => 55,
                    "punti_ospite" => 39,
                ],
                [
                    "squadra_casa" => "Dinamo",
                    "squadra_ospite" => "Cantù",
                    "punti_casa" => 55,
                    "punti_ospite" => 77,
                ],
                [
                    "squadra_casa" => "Varese",
                    "squadra_ospite" => "Venezia",
                    "punti_casa" => 79,
                    "punti_ospite" => 88,
                ],
            ]

        ?>

        <h1>Lista partite</h1>

        <ul>

         <?php for ($i=0; $i < count($partite); $i++) { ?>

             <?php $partita = $partite[$i]; ?>

             <li>

             <?php echo $partita['squadra_casa'] . ' - ' . $partita['squadra_ospite'] . ' | ' . $partita['punti_casa'] . ' - ' . $partita['punti_ospite']; ?>

             </li>
             
         <?php } ?>

        </ul>
        
    </body>
</html>
