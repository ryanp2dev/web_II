<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabela</h1>
    <?php
    // for($i=0;$i <=10;$++){

    // }
    ?>

    <table border=1>
        <thead>
            <tr>
                <th>Numero</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            
                <?php
                $t=5;
                    for($i=0;$i<=15;$i++){
                        $res = $t * $i;
                       echo "
                       <tr>
                        <td>$t x $i</td>
                        <td>$res</td>
                       </tr>
                       ";
                    }
                ?>
            
        </tbody>
    </table>
</body>
</html>