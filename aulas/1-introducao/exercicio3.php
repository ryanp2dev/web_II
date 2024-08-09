<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <p>Lista de Imagens</p>
    <ul>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <li><img src="imagens/imagem<?php echo $i;?>.jpg"></li>
    <?php } ?>
    <ul>
</body>
</html>