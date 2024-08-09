<?php 
$host = 'localhost';
$porta = '3305';
$banco = 'web2';
$usuario = 'root';
$senha = '';
try {
    $conexao = new PDO("mysql:host=$host;port=$porta;dbname=$banco", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // preparar / montar a SQL
    $sql = "SELECT * FROM pessoa";

    $stmt = $conexao->prepare($sql);

    // executar a SQL
    $stmt->execute();

    $listaPessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($listaPessoas);
    echo '</pre>';

}
catch (PDOException $e) {
    echo "Falha ao conectar ao banco de dados";
}
?>