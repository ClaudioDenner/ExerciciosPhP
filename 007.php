<?php
echo "7. Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. ";
?>
<html>
    <body>
        <form method="post">
            Valor A:<input type="number" name ="valor1" required><br>
            Valor B:<input type="number" name ="valor2" required><br>
            <input type="submit" value="Verificar"><br>
        </form>

        <?php
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];

            if($valor1 > $valor2){ echo "A é maior que B";} elseif($valor1 < $valor2){echo "A é menor que B";} elseif($valor1 == $valor2){ echo "A é igual a B";}



        ?>
    </body>
</html>