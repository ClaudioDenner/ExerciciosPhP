<?php
echo "5. Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. ";
?>

<html>
    <head>
    </head>
    <body>
        <form method="post">
            <input type="number" name="valor" required>
        </form>


        <?php

        $valor = $_POST['valor'];

        if(is_float($valor/2)){echo "o número $valor é impar";} else {echo "o valor $valor é par";}

        ?>

    </body>
</html>