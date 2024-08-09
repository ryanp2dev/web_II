<?php 

if (!empty($_POST)) {
    print_r($_POST);
    // conectar ao banco de dados
    //                  SGBD; endereco; porta;         nome do banco, usuario, senha
    $conexao = new PDO("mysql:host=localhost;port=3305;dbname=web2", 'root', '');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // preparar / montar a SQL
    $sql = "INSERT INTO 
                pessoa 
            (nome, telefone, email) 
                VALUES 
            (:nome, :telefone, :email)";

    $stmt = $conexao->prepare($sql);

    $stmt->bindValue(':nome', $_POST['nome'], PDO::PARAM_STR);
    $stmt->bindValue(':telefone', $_POST['telefone'], PDO::PARAM_STR);
    $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);

    // executar a SQL
    if ($stmt->execute() == true) {
        echo 'Inserido com sucesso!';
    }
    else {
        echo 'Falha ao inserir';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
</head>
<body>
    <form action="" method="post">
        Nome: <input type="text" name="nome" id="nome">
        <br/><br/>
        Telefone: <input type="text" name="telefone" id="telefone">
        <br/><br/>
        E-mail: <input type="email" name="email" id="email">
        <br/><br/>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>