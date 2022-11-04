<?php

echo "Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: 4,5";

?>
<html>
    <body>
        <form method="post">
            <input type="number"  name="valor1" required><br>
            <input type="number" name="valor2" required><br>
            <input type="submit" value="verificar">
        </form>

        <?php

        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];


        $array = [];


        array_push($array, $valor1, $valor2);
        sort($array);

        foreach($array as $dado){ 
            echo "$dado<br>";
        }



        ?>
    </body>
</html>