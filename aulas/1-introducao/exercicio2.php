<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <p>Tabuada de multiplicação de 3<?php echo "\u{1F9E0}"; ?></p>
    <table border=1>
        <tr>
            <td>Número</td>
            <td>Resultado</td>
        </tr>
        <?php for ($i = 0; $i <= 15; $i++) { ?>
            <tr>
                <td>3 x <?php echo $i; ?></td>
                <td><?php echo (3 * $i); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>