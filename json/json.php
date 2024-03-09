<?php
    $url = "https://gist.githubusercontent.com/jonasruth/61bde1fcf0893bd35eea/raw/10ce80ddeec6b893b514c3537985072bbe9bb265/paises-gentilicos-google-maps.json";
   $link ="https://www.ifms.edu.br/" ;
   $dados = file_get_contents($url);
   $paises = json_decode($dados,true);
//    print_r($paises);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="saida.php" method="get">
    <label for="">
        Nome:
        <input type="text" id="nome" name="nome">
    </label>
    <label for="">
        Telefone:
        <input type="tel" name="telefone" id="tel">
    </label>
    <label for="">
        Email:
        <input type="email" name="email" id="email">
    </label>
    <label for="">
        Senha:
        <input type="password" name="senha" id="senha">
    </label>
    <select name="pais_origens" id="pais_origens" >
    <option value="">Selecione o seu pais</option>
    <?php
        foreach($paises as $id => $pais){
            list( "gentilico" => $p, "sigla" => $sigla ) = $pais;
            echo " <option value='$sigla'>$p - $sigla <br></option>";
        }
    ?>
    </select>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>