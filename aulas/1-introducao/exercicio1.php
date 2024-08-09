<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h4>
        Exibe um nome por 20 vezes alternando entre itálico e negrito         
    </h4>
    <?php 
        $contador = 1;
        while ($contador <= 20) {
            if ($contador % 2 != 0) {
                echo "<i>" . $contador . " Wesley<br/></i>";
            }
            else {
                echo "<b>";            
                echo $contador . " Wesley<br/>";
                echo "</b>";
            }
            $contador++;
        }
    ?>
</body>
</html>