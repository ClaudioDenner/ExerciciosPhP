<?php
echo "1. Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. ";

?>

<html>
    <head></head>
    <body>
        <form method="POST">
            <input type="number" name="valor">
        </form>

    <?php
    if(!isset($_POST['valor'])){$valor = "";} else {$valor = $_POST['valor'];}
    

    $msg = "";

    if($valor >0) {$msg = "positivo";} elseif($valor <0) {$msg = "negativo";} elseif($valor==0){$msg = "neutro";}

    echo "o valor digitado foi: $valor, este valor é $msg";

    ?>
    
    </body>

</html>