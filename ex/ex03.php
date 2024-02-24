<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Galeria</h1>
    <?php
        for($i=1;$i<=5;$i++){
            echo"<img src='imgs/img_$i.jpg'alt='' style='display: block;margin-top:1rem'>";
        }
    ?>

    
</body>
</html>