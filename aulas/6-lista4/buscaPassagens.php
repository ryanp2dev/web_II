
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Sigla aeroporto: <input type="text" name="aeroporto" id="aeroporto"><br/><br/>
        <input type="submit" value="Buscar">
    </form>

    <?php 
$url = "https://raw.githubusercontent.com/wkanashiro/php2024/main/passagens.json";
$dados = file_get_contents($url);
$listaPassagens = json_decode($dados, true);

//print_r($_POST);

if (!empty($_POST)) {
    $encontrei = false;

    for ($i = 0; $i < sizeof($listaPassagens); $i++) {
        if (str_contains($listaPassagens[$i]['origemDestino'], $_POST['aeroporto'])) {
            echo $listaPassagens[$i]['origemDestino'] . ' -- R$ ';
            echo $listaPassagens[$i]['valor'] . '<br/><br/>';
            $encontrei = true;
        }
    }

    if (!$encontrei) {
        echo 'Nenhuma passagem foi encontrada.<br/><br/>';
    }
}
?>
</body>
</html>