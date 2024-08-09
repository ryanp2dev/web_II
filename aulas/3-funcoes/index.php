<?php 
// Definição de uma função. Sintaxe:

function nomeDaFuncao() { // { indica o início da função
    // corpo da função
    // escopo da função
} // } encerramento da função

function exibeMensagem() {
    echo "Olá, seja bem-vindo(a) <br/>";
    echo "Hoje é dia 26/03/2024";
}

// Funções com parâmetros:
function exibeQualquerMensagem($mensagem) {    
    echo "<p>$mensagem</p>";
}

// exibeQualquerMensagem("São Paulo campeão da Libertadores");

$qtdeVendas = 99;
$msg = "Wesley realizou " . $qtdeVendas . " vendas";

exibeQualquerMensagem($msg);

// Funções com mais parâmetros
function exibeDuasMensagens($msg1, $msg2) {
    echo "<p>$msg1</p>";
    echo "<p>$msg2</p>";    
}

exibeDuasMensagens("Brasil 3 x 3 Espanha", "Brasil 1 x 0 Inglaterra");

// Função com argumento padrão
function exibeMensagemTime($nomeDoTime = "São Paulo FC") {
    
    echo "<p>$nomeDoTime é o melhor time do Brasil!</p>";
}

exibeMensagemTime();
exibeMensagemTime("Operário");
exibeMensagemTime("Comercial");
exibeMensagemTime("");

// Função com o número de argumentos "desconhecido/variável"
function exibeMeusPets(...$pets) {
    // $pets será um array
    for ($i = 0; $i < count($pets); $i++) {
        echo "<p>$i -- $pets[$i]</p>";
    }
}

//exibeMeusPets("Manu");

//exibeMeusPets("Manu", "Stella", "Ozzi");

exibeMeusPets("Manu", "Stella", "Ozzi", "Tibério", "Princesa");

function exibeMeusPets2(...$pets) {
    echo '<pre>';
    print_r($pets);
    echo '</pre>';
}

$gatos = array("Gato 1", "Gato 2", "Gato 3");
$cachorros = array("Cachorro 1", "Cachorro 2", "Cachorro 3", "Cachorro 4");

exibeMeusPets2($gatos, $cachorros);

function exibeMeusPets3($tipo, ...$pets) {
    echo $tipo . '<br/>';
    echo '<pre>';
    print_r($pets);
    echo '</pre>';
}

exibeMeusPets3("gato", "Stella", "Manu");

// Função com retorno de valor
function somaDoisNumeros($a, $b) {
    $soma = $a + $b;
    
    return $soma;
}

//$x = somaDoisNumeros(5, 7);
echo "O valor da soma é " . somaDoisNumeros(5, 7);

function verificaSeEhPar($n) {
    if ($n % 2 == 0) {
        return true;
    }

    return false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de funções</title>
</head>
<body>    
    <h3><?php exibeMensagem(); ?></h3>
</body>
</html>