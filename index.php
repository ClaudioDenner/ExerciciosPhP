<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercícios PHP</title>
</head>
<body>

    <h1>Lista de Exercícios</h1>
    <ul>
    <?php
        $path = "exercicios/";
        $diretorio = dir($path);

        while($diretorio){

            echo $diretorio->read()."<br>";
        }

    ?>
        <a><li></li></a>
   
    </ul>
</body>
</html>