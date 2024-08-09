<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis no PHP</title>
</head>
<body>
    <?php 
        $numero = 5;
        echo $numero;
    ?>
    
    <br/>

    <?php        
        $nome = "Wesley"; // string
        echo "<p class='paragrafo'>" . $nome . "</p>"; // . para juntar string

        $nomeCompleto = $nome . " Kanashiro";

        var_dump($nomeCompleto);

        $idade = 21; // int
        var_dump($idade);

        $altura = 1.72; // double
        //print_r($altura);
        var_dump($altura);
        echo "<p>";
            echo $altura;
        echo "</p>";

        $email = null;
        var_dump($email);

        echo '<br/>';
        $aprovado = true; // bool
        var_dump($aprovado);
        //echo $aprovado;

        $telefone = ''; // string vazia

        /* 
        maior que   >
        menor que   <
        maior ou igual  >=
        menor ou igual <=
        igualdade ==
        ($altura === "1.72") -> F
        diferença !=
        */

        $a = 50;
        $b = 10;

        if ($a > $b) {
            echo $a . " é maior do que " . $b;
        }
        else {
            if ($b > $a) {
                echo $b . " é maior do que " . $a;
            }
            else {
                echo $b . " é igual " . $a;
            }            
        }

        echo "<br/>";
        $i = 1;
        while ($i <= 10) {
            echo $i . "</br>";
            $i++;
        }

        echo "<br/>";
        for ($j = 1; $j <= 10; $j++) {
            echo $j . " ";
        }

    ?>
</body>
</html>