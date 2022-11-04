<?php 

echo "4. Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. <br> Realize a operação escolhida em cada um dos números. ";

?>
<html>
    <head></head>
    <body>

    <form method="post">
        <input type="number" name="valor1" required><br>
        <input type="radio" name="op" value="soma" required><label>Somar</label>
        <input type="radio" name="op" value="sub"><label>Subtrair</label>
        <input type="radio" name="op" value="mult"><label>Multiplicar</label>
        <input type="radio" name="op" value="div"><label>Dividir</label><br>
        <input type="number" name="valor2"><br>
        <input type="submit" value="Calcular" required>

    </form>

<?php
if(isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['op']))
{
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$op = $_POST['op'];


switch($op){

case "soma":  $result = $valor1 + $valor2; break;

case "sub": $result = $valor1 - $valor2; break;

case "mult": $result = $valor1 * $valor2; break;

case "div": $result = $valor1 / $valor2; break;


}

}

else { $result = "Algum dos campos não foi preenchido, favor preencha e clique em calcular.";}


echo $result;

?>



    </body>
</html>