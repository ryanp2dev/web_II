<?php 
echo '<pre>'; 
print_r($_POST);
echo '</pre>';

$listaDeProdutos = array();

if (!empty($_POST['produtos'])) {
    $listaDeProdutos = unserialize($_POST['produtos']);
}

if (!empty($_POST)) {
    $listaDeProdutos[] = $_POST['nomeProduto'];
}
print_r($listaDeProdutos);
$listaDeProdutos = serialize($listaDeProdutos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produtos</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="produtos" value="<?php echo $listaDeProdutos; ?>">
        Nome do Produto: <input type="text" name="nomeProduto" id="nomeProduto">
        <br/>
        <input type="submit" value="Cadastrar">
    </form>

    <p>Produtos Cadastrados:</p>
</body>
</html>
