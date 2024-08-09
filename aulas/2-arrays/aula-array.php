<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Arrays</title>
</head>
<body>
    <?php 
        $listaAlunos = array("João", "Maria", "Wesley", "Roberta");
        
        print_r($listaAlunos);
        echo '<br/><br/>';

        unset($listaAlunos[2]);

        for ($i = 0; $i < count($listaAlunos); $i++) {
            echo $listaAlunos[$i] . '<br/>';
        }
      

        $listaAlunos[] = "Josué";

        foreach ($listaAlunos as $aluno) {
            echo $aluno . '<br/>';
        }

        print_r($listaAlunos);

        echo '<br/><br/>';
        /*
        $listaAlunos2 = array("aluno1" => "João", 
                            "aluno2" => "Maria", 
                            "aluno5" => "Wesley", 
                            "aluno4" => "Roberta");
        
        print_r($listaAlunos2);
        */
    ?>
</body>
</html>