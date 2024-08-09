<?php 
if (!empty($_POST)) {
    print_r($_POST);
}

/*
condicao ? __V___ : ___F___
!empty($_POST) ? $_POST['nome'] : ''

if (!empty($_POST)) {
    echo $_POST['nome'];
}
else {
    echo '';
}
*/

$nome = (!empty($_POST)) ? $_POST['nome'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Nova Pessoa</title>
</head>
<body>
    <form action="" method="post">
            Nome: <input type="text" name="nome" id="nome" value="<?php echo (!empty($_POST)) ? $_POST['nome'] : ''; ?>" ><br/>
            Data de Nascimento: <input type="date" name="dataNascimento" id="dataNascimento" value="<?php echo (!empty($_POST)) ? $_POST['dataNascimento'] : ''; ?>"></br>
            E-mail: <input type="email" name="email" id="email" value="<?php echo (!empty($_POST)) ? $_POST['email'] : ''; ?>">
            Senha: <input type="password" name="senha" id="senha" value="<?php echo (!empty($_POST)) ? $_POST['senha'] : ''; ?>"></br>
            <button type="submit">Cadastrar na Lista</button>            
            <button type="reset">Limpar</button>        
    </form>
</body>
</html>