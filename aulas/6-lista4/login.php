<?php
if (!empty($_GET['mensagem'])) {
    echo $_GET['mensagem'];
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
    <form action="processaLogin.php" method="post">
        Usuário: <input type="text" name="usuario" id="usuario">
        <br/>
        Senha: <input type="password" name="senha" id="senha"><br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>