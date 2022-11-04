<?php

echo "8. Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. <br>Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.";

?>
<html>
    <body>
      
        <form method="post">
            Matemática: <input type="number" step=".01" name = "nota1" required><br>
            Português: <input type="number" step=".01" name = "nota2"  required><br>
            Geografia: <input type="number" step=".01" name = "nota3"  required><br>

            <input type="submit" value="Calcular Média">


        
        </form>

    <?php
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $media = ($nota1 + $nota2 + $nota3)/3;
        $sit = "";


            if($media>= 7){$sit = "Aprovado!";} else {$sit = "Reprovado";}

   
       


        echo "(Matemática $nota1) + (Português $nota2) + (Geografia $nota3) = Média: $media ".$sit;

    ?>



    </body>
</html>