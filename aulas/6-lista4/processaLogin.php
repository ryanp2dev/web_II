<?php 
if (!empty($_POST)) {
    if ($_POST['usuario'] == "wesley" && $_POST['senha'] == "987654" || 
        $_POST['usuario'] == "kanashiro" && $_POST['senha'] == "12345678" || 
        $_POST['usuario'] == "wkanashiro" && $_POST['senha'] == "qwerty123" || 
        $_POST['usuario'] == "wesley.kanashiro" && $_POST['senha'] == "asdfg9876") {
            echo "Autenticação realizada com êxito!";
    }
    else {
        header('Location: login.php?mensagem=Falha ao realizar autenticação.');
    }
}
else {
    header('Location: login.php?mensagem=Você precisa preencher o formulário.');
}
?>