<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-3_Level-1_ex-3</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div class="mostrar">
        <h1>Arrays</h1>
        <!--
        Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
        La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.
        -->

        <?php

        $Colors = array("red", "rgreen", "Rblue", "ryEllow");
        

        echo "<h2>Tenim l'array:</h2>";
        print_r($Colors);

        $Character = 'l';
        echo "<h2>Busquem dins de l'array el caràcter '$Character'</h2><br>";
        $Result = SearchCharacterInArray($Colors, $Character);
        ShowResult($Result, $Character);

        $Character = 'e';
        echo "<h2>Ara busquem dins de l'array el caràcter '$Character'</h2><br>";
        $Result = SearchCharacterInArray($Colors, $Character);
        ShowResult($Result, $Character);

        $Character = 'r';
        echo "<h2>Ara busquem dins de l'array el caràcter '$Character'</h2><br>";
        $Result = SearchCharacterInArray($Colors, $Character);
        ShowResult($Result, $Character);


        function SearchCharacterInArray($Colors, $Character){

            if (count($Colors) == 0 || $Character == ''){
                $Contains=FALSE;
            }else{                
                $Contains=TRUE;
            }
            foreach ($Colors as $x) {
                //echo "<h3>Comprovant l'element: $x</h3>";
                //echo strpos(strtolower($x), strtolower($Character));
                if (strpos(strtolower($x), strtolower($Character))===false) {
                    //echo "False<br>";
                    $Contains = FALSE;
                    break;
                }
            }
            return $Contains;
        }

        function ShowResult($Result, $Character){
            if ($Result) {
                echo "<h2>Resultat: Si conté el caracter '$Character' en tots els elements del array</h2><br>";            
            }
            else {
                echo "<h2>Resultat: No conté el caracter '$Character' en tots els elements del array</h2><br>";
            }
        }
        ?>
    </div>
</body>
</html>