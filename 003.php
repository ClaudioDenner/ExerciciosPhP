<?php
echo "3. Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6";
?>

<html>
    <head></head>
    <body>
        <form method="post">
            <input type="number" name="valor">
        </form>

<?php
$msg = "";
$result = 1;

if(!isset($_POST['valor'])){$valor = "";} else {$valor = $_POST['valor'];}

if($valor==""){echo "Digite um valor para obter o seu fatorial";} else 
{
 if($valor >0) {

    for($i=$valor-1;$i>=1;$i--){
        
        $msg = $msg."x$i";
        $result = $result*$i;
       

    }


 } else {

    for($i=$valor+1;$i<=-1;$i++){
        
        $msg = $msg."x$i";
        $result = $result*$i;
       

    }
}

    echo $valor.$msg." = ".$result*$valor;

}





?>




    </body>
</html>