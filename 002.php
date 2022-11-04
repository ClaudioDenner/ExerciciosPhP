<?php

echo "2. Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado";
?>
<html>
    <head></head>
    <body>
        <form method="post">
            <input type="number" name="valor">
        </form>
<?php

if(!isset($_POST['valor'])){$valor = "";} else {$valor = $_POST['valor'];}

if($valor==""){echo "Digite um valor para exibir a tabuada";} else 
{

    for($value = 1; $value<=10; $value++){

    
        echo "$valor x $value = ".$valor*$value."<br>";
    
    }

}



?>

    </body>
</html>