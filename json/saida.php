<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="json.php">Voltar</a> 
<?php
$pais =$_GET["pais_origens"];
$nome = $_GET["nome"];
$tel = $_GET["telefone"];
$email = $_GET["email"];
$senha = $_GET["senha"];
echo "$nome $pais $tel $email $senha";
?>
</body>
</html>
