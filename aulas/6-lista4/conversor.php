<?php 
//print_r($_POST);
if (!empty($_POST)) {
    $dolar = $_POST['valor'] / 5.70;
    $euro = $_POST['valor'] / 6.80;
    $clp = $_POST['valor'] / 0.0059;
    $ars = $_POST['valor'] / 0.004;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>1. [conversor.php] Implemente um script que contenha um formulário HTML com um campo para o usuário inserir um determinado valor na moeda brasileira e, ao submeter este formulário (method post), calcule e exiba o valor em dólares, euros, pesos chilenos e pesos argentinos.
Considere as seguintes cotações:
1 USD = 5,70 BRL
1 EUR = 6,80 BRL
1 CLP = 0,0059 BRL
1 ARS = 0,004 BRL
</p>
<form action="" method="post">
    Valor em R$ <input type="text" name="valor" id="valor">
    <br/>
    <input type="submit" value="Calcular">
</form>
<p>
    <?php if (!empty($_POST)) { ?>
        <?php echo $_POST['valor'] . " BRL equivale a:"; ?>
        <ul>
            <li><?php echo $dolar . " USD"; ?></li>
            <li><?php echo $euro . " EUR"; ?></li>
            <li><?php echo $clp . " CLP"; ?></li>
            <li><?php echo $ars . " ARS"; ?></li>
        </ul>
    <?php } ?>
</p>
</body>
</html>