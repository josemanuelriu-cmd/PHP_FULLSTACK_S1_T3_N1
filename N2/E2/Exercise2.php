<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-3_Level-2_ex-2</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>Arrays nivell 2</h1>
        <!--
            Crea un programa que llisti les notes dels alumnes d’una classe. 
            Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. 
            Cada alumne tindrà 5 notes (valorades del 0 al 10).

            A més, crea una funció que, donades les notes de tots els alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.
        -->
        <?php
        $Alumns = array (
            array("Anna",6,8,5,9,3),
            array("Joan",5,3,2,7,6),
            array("Ruben",8,9,6,7,9),
            array("Sara",7,5,3,6,4)
            );
        ?>
        <h2>Alumnes i les seves notes</h2>
        <ul>        
            <?php foreach ($Alumns as $alumne) {
                echo "<li>" . $alumne[0]." - Nota 1: ".$alumne[1]." - Nota 2: ".$alumne[2]." - Nota 3: ".$alumne[3]." - Nota 4: ".$alumne[4]." - Nota 5: ".$alumne[5]."</li><br>";
            } ?>    
        </ul>

        <?php
        Mitjanes($Alumns);

        function Mitjanes($Alumns){
            $SumN1=0;$SumN2=0;$SumN3=0;$SumN4=0;$SumN5=0;
            foreach ($Alumns as $alumne) {
                $SumN1 += $alumne[1];
                $SumN2 += $alumne[2];
                $SumN3 += $alumne[3];
                $SumN4 += $alumne[4];
                $SumN5 += $alumne[5];
            }
            echo "<h3>Mitjana nota 1: ". $SumN1/count($Alumns)."</h3>";
            echo "<h3>Mitjana nota 2: ". $SumN2/count($Alumns)."</h3>";
            echo "<h3>Mitjana nota 3: ". $SumN3/count($Alumns)."</h3>";
            echo "<h3>Mitjana nota 4: ". $SumN4/count($Alumns)."</h3>";
            echo "<h3>Mitjana nota 5: ". $SumN5/count($Alumns)."</h3>";

            $Mitja=0;
            foreach ($Alumns as $alumne) {
                $Mitja = ($alumne[1] + $alumne[2] + $alumne[3] + $alumne[4] + $alumne[5]) / 5   ;
                echo "<h3>Mitjana notes ".$alumne[0].": ". $Mitja."</h3>";                
            }


             $MitjaTot = 0;
             foreach ($Alumns as $alumne) {
                $MitjaTot += ($alumne[1] + $alumne[2] + $alumne[3] + $alumne[4] + $alumne[5]);
             }
            echo "<h3>Mitjana notes total: ". $MitjaTot/(count($Alumns)*5)."</h3>";
        }
        ?>
    </div>
    

</body>
</html>