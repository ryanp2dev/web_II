<?php 
$url = "https://raw.githubusercontent.com/wkanashiro/php2024/main/alunos-nota-disciplina-1.json";
$dadosJson = file_get_contents($url);
$alunos = json_decode($dadosJson, true);

/*
echo '<pre>';
print_r($alunos);
echo '</pre>';
*/

for ($i = 0; $i < count($alunos); $i++) {
    $alunos[$i]['media'] = ($alunos[$i]['notas']['p1'] + $alunos[$i]['notas']['p2'] + $alunos[$i]['notas']['p3']) / 3.0;
}

/*
echo '<pre>';
print_r($alunos);
echo '</pre>';
*/

$maior = 0.0;
$menor = 10.0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>Nome</td>
            <td>P1</td>
            <td>P2</td>
            <td>P3</td>
            <td>Média</td>
        </tr>
        <?php foreach ($alunos as $a) { 
                        
            if ($a['media'] > $maior) {
                $maior = $a['media'];
            }
            
            if ($a['media'] < $menor) {
                $menor = $a['media'];
            }
            ?>
            <tr>
                <td><?php echo $a['nome']; ?></td>
                <td><?php echo $a['notas']['p1']; ?></td>
                <td><?php echo $a['notas']['p2']; ?></td>
                <td><?php echo $a['notas']['p3']; ?></td>
                <td><?php echo $a['media']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <p>Maior Média: <?php echo $maior; ?></p>
    <ul>
    <?php foreach ($alunos as $a) {             
            if ($a['media'] == $maior) { ?>
                <li><?php echo $a['nome']; ?></li>
            <?php } 
        } ?>
    </ul>
    <p>Menor Média: <?php echo $menor; ?></p>
    <ul>
    <?php foreach ($alunos as $a) {             
            if ($a['media'] == $menor) { ?>
                <li><?php echo $a['nome']; ?></li>
            <?php } 
        } ?>
    </ul>
    
</body>
</html>