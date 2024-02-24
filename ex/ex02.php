<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Tabela de Multiplicação 3";
    echo "
    <table border=1>
    <thead >
        <tr border=1>
            <th>Numero</th>
            <th>Resultado</th>
        </tr>
    </thead>
    </table>

    ";
   $tres = 3;
   for($i=0 ; $i <= 10;$i++){
    $t = $i* $tres;
    echo "
    <table border=1>
   
    <tbody>
        <tr>
            <td>3 X $i </td>
            <td>$t</td>
        </tr>
    </tbody>
    </table>

    ";
  
   }
    
    ?>
    
</body>
</html>