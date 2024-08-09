<?php 
$url = "https://gist.githubusercontent.com/jonasruth/61bde1fcf0893bd35eea/raw/10ce80ddeec6b893b514c3537985072bbe9bb265/paises-gentilicos-google-maps.json";

$dados = file_get_contents($url);

$paises = json_decode($dados, true);
// print_r($paises);
// die();
print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json to Array</title>
</head>
<body>
    <form action="">
        Nome Completo: <input type="text" name="nome" id="nome"><br/>
        Telefone: <input type="text" name="tel" id="tel"><br/>
        E-mail: <input type="email" name="email" id="email"><br/>
        Senha: <input type="password" name="senha" id="senha"><br/>
        <select name="pais_origem" id="pais_origem">
            <option value="">Selecione um país</option>
            <?php foreach ($paises as $pais) { ?>
                <option value="<?php echo $pais['sigla']?>"><?php echo $pais['nome_pais']?></option>
            <?php } ?>
        </select>
        <br/>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>