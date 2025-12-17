<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-3_Level-3_ex-1</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>Arrays nivell 3</h1>
        <!--
            Donat un array d’enters, fes un programa que:

            Retorni cada valor de l’array elevat al cub fent servir la funció array_map().
        -->
        <?php
            $MyArray = [1,2,3,4,5,6];
            
        ?>
        <?php 
            function Cube($value){
                return($value*$value*$value);
            }

            print_r(array_map("Cube",$MyArray));
        ?>
    </div>
</body>
</html>