<?php 
if (!empty($_POST)) {
    if ($_POST['senha'] == $_POST['confirmacao']) {
        echo "Cadastro realizado com sucesso!";
    }
    else {
        echo "Falha ao realizar o cadastro. As senhas não conferem.";
    }
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
    <form action="" method="post">
        Nome: <input type="text" name="nome" id="nome" value="<?php echo !empty($_POST['nome']) ? $_POST['nome'] : '' ?>"><br/>
        Usuário: <input type="text" name="usuario" id="usuario" value="<?php echo !empty($_POST['usuario']) ? $_POST['usuario'] : '' ?>"><br/>
        Senha: <input type="password" name="senha" id="senha" value="<?php echo !empty($_POST['senha']) ? $_POST['senha'] : '' ?>"><br/>
        Confirmação de senha: <input type="password" name="confirmacao" id="confirmacao" value="<?php echo !empty($_POST['confirmacao']) ? $_POST['confirmacao'] : '' ?>"><br/>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>