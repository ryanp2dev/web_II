<?php 
//print_r($_POST);
$media = -1;
if (!empty($_POST['nota1']) && !empty($_POST['nota2']) && !empty($_POST['nota3'])) {
    $n1 = str_replace(',', '.', $_POST['nota1']);    
    $n2 = str_replace(',', '.', $_POST['nota2']);
    $n3 = str_replace(',', '.', $_POST['nota3']);
    echo $n1 . '<br/>';
    echo $n2 . '<br/>';
    echo $n3 . '<br/>';
    $media = ($n1 + $n2 + $n3) / 3.0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <form action="" method="post">
        Nota 1: <input type="text" name="nota1" id="nota1"><br/>
        Nota 2: <input type="text" name="nota2" id="nota2"><br/>
        Nota 3: <input type="text" name="nota3" id="nota3"><br/>
        <input type="submit" value="Calcular">
    </form>
    <?php if ($media != -1) {
        echo 'Média: $media';
    } ?>
    
</body>
</html>