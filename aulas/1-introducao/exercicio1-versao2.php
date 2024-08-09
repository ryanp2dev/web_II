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
            if ($contador % 2 != 0) { ?>
                <i><?php echo $contador . " Wesley"; ?><br/></i>
            <?php } else { ?>
                <b><?php echo $contador . " Wesley"; ?><br/></b>
            <?php } 
            $contador++;
        } ?>
</body>
</html>