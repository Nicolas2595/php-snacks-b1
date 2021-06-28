<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack3</title>
    </head>
    <body>

        <?php

            /*
            ## Snack 3
            Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
            */

            $array_numeri = [];

            while(count($array_numeri) < 15) {
                $array_casuali = rand(1, 100);

                while(!in_array($array_casuali,$array_numeri)){
                    $array_numeri[] = $array_casuali;
                }
            }
            
        ?>

        <ul>

            <?php for($i=0; $i< count($array_numeri); $i++) { ?>

                <li> <?php echo $array_numeri[$i] ?> </li>

            <?php } ?>

        </ul>
        
    </body>
</html>