<?php 
$url = "https://raw.githubusercontent.com/wkanashiro/php2024/main/alunos.json";
$dadosJson = file_get_contents($url);

$alunos = json_decode($dadosJson, true);
echo '<pre>';
print_r($alunos);
echo '</pre>';
$contador = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Alunos Turmas</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>#</td>
            <td>Nome do(a) estudante</td>
            <td>Telefone</td>
            <td>Data de Nascimento</td>
            <td>Curso</td>
        </tr>
        <?php foreach ($alunos as $alu) { ?> 
            <tr>
                <td><?php echo $contador; ?></td>
                <td><?php echo $alu['nome']; ?></td>
                <td><?php echo $alu['telefone']; ?></td>
                <td><?php echo $alu['data_nascimento']; ?></td>
                <td><?php echo $alu['curso']; ?></td>
            </tr>
            <?php $contador++; ?>
        <?php } ?>
    </table>
    <h2>Estudantes do curso Tecnologia em Sistemas para Internet</h2>
    <ul>
        <?php foreach ($alunos as $a) { 
            if ($a['curso'] == "Tecnologia em Sistemas para Internet") { ?>
                <li><?php echo $a['nome']; ?></li>
            <?php }
         } ?>
    </ul>
</body>
</html>