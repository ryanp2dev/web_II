<?php 
print_r($_POST);
if (!empty($_POST)) {
    if ($_POST['tipo'] == 'F') { // fahrenheit
        $tempConvertida = 1.8 * $_POST['tempC'] + 32;
    }
    if ($_POST['tipo'] == 'K') { // kelvin
        $tempConvertida = $_POST['tempC'] + 273;
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
        <input type="text" name="tempC" id="tempC" value="<?php echo (!empty($_POST)) ? $_POST['tempC'] : ''; ?>">°C
        <br/>
        <select name="tipo" id="tipo">
            <option value="">:: Selecione o tipo ::</option>
            <option value="F" <?php echo (!empty($_POST) && $_POST['tipo'] == 'F') ? 'selected' : ''; ?>>Fahrenheit</option>
            <option value="K" <?php echo (!empty($_POST) && $_POST['tipo'] == 'K') ? 'selected' : ''; ?>>Kelvin</option>
        </select>
        <br/>
        <input type="submit" value="Calcular">
    </form>
    <?php if (!empty($_POST)) {
        echo $tempConvertida . ' °' . $_POST['tipo'];
    } ?>
</body>
</html>