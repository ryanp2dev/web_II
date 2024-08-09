<?php 
$url = "https://raw.githubusercontent.com/wkanashiro/php2024/main/listaProdutos.json";
$dados = file_get_contents($url);
$listaProdutos = json_decode($dados, true);

//echo '<pre>';
//print_r($listaProdutos);
//echo '</pre>';

if (!empty($_POST)) {
    //echo strtolower($_POST['nomeProduto']) . '<br/>';
    $encontrei = false;

    foreach ($listaProdutos as $produto) {
        if (strtolower($produto['nome']) == strtolower($_POST['nomeProduto']) || str_contains($produto['nome'], $_POST['nomeProduto'])) {
            echo $_POST['nomeProduto'] . '<br/>Valor: R$ ' . $produto['valor'];
            $encontrei = true;
        }
    }

    if ($encontrei == false) {
        echo "Produto " . $_POST['nomeProduto'] . " não encontrado.";
    }

    echo '<br/><br/>';
}
//print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nome do Produto: <input type="text" name="nomeProduto" id="nomeProduto" required>
        <br/><br/>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>