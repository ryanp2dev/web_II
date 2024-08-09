<?php 
$times = array("São Paulo", 
                "Palmeiras", 
                "Corinthians", 
                "Cruzeiro", 
                "Atlético-MG",
                "Flamengo",
                "Santos",
                "Operário");

$times[] = "Atlético-PR";
$times[] = "Comercial";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times</title>
</head>
<body>
    <h2>Antes da remoção</h2>
    <?php foreach ($times as $t) { ?>
        <h3><?php echo $t; ?></h3>
    <?php } 
        unset($times[7]);        

    echo "<h2>Depois da remoção</h2>";
    
    foreach ($times as $t) { ?>
        <h3><?php echo $t; ?></h3>
    <?php } ?>
    
</body>
</html>