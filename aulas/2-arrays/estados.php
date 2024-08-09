<?php 
$estados = array(["Mato Grosso do Sul", "Campo Grande"],
                 ["Mato Grosso", "Cuiabá"], 
                 ["Ceará", "Fortaleza"],
                 ["Amazonas", "Manaus"],
                 ["Paraíba", "João Pessoa"]);

// print_r($estados);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados</title>
</head>
<body>
    <?php foreach ($estados as $est) { ?>
        <h1><?php echo $est[0]; ?></h1>
        <h3><?php echo $est[1]; ?></h3>
    <?php } ?>
</body>
</html>