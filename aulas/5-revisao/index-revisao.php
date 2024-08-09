<?php 
echo '<pre>';
print_r($_POST);
echo '</pre>';

# String
# números corretos
# texto qualquer
# número decimal (vírgula)
# número decimal (ponto)

# 1,5895
# sadasdsd
# 0
# 0.00 0,0
# 56

if (!empty($_POST)) { // usuário submeteu o formulário
    if (str_contains($_POST['v1'], ",")) {
        $_POST['v1'] = str_replace(',', '.', $_POST['v1']);
    }
    if (str_contains($_POST['v2'], ",")) {
        $_POST['v2'] = str_replace(',', '.', $_POST['v2']);
    }
    if (is_numeric($_POST['v1']) && is_numeric($_POST['v2'])) {
        if ($_POST['op'] == '+') { 
            $resultado = $_POST['v1'] + $_POST['v2'];               
        }
        elseif ($_POST['op'] == '-') {
            // subtração
            $resultado = $_POST['v1'] - $_POST['v2'];
        }
        elseif ($_POST['op'] == '*') {
            // multiplicação
            $resultado = $_POST['v1'] * $_POST['v2'];
        }
        elseif ($_POST['op'] == '/') {
            // quociente
            $resultado = $_POST['v1'] / $_POST['v2'];
        }
        else {
            echo "Operação inválida";
        }
    }
    else {
        echo "Valores inválidos";
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>29/06/2024</title>
</head>
<body>
    <form action="" method="post">
        Valor 1: <input type="text" name="v1" id="v1" required><br/>        
        Valor 2: <input type="text" name="v2" id="v2" required><br/>
        
        <select name="op" id="op" required>
            <option value="">Selecione a Operação</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
    
    <?php if (!empty($resultado)) { ?>
        <p>O valor do cálculo é: <?php echo $resultado; ?></p>
    <?php } ?>

    <?php if (!empty($resultado)) { 
        echo "<p>O valor do cálculo é: $resultado</p>";
    } ?>
    
    <?php if (!empty($resultado)) { 
        echo "<p>O valor do cálculo é: " . $resultado . "</p>";
    } ?>
</body>
</html>