<?php
echo "10. Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, <br>informar que não existe mês com este número.";
?>
<html>
    <body>
        <form method="POST">
            Digite um mês: <input type="number" name ="value" required>
        </form>
        <?php
            if(!isset($_POST['value'])){echo"insira um valor";}
            else {

                if($_POST['value']>12 || $_POST['value']<1){echo "O mês digitado não existe!";} else {

                    $value = $_POST['value'];

                    switch($value){
    
                        case 1: echo "Janeiro"; break;
                        case 2: echo "Fevereiro"; break;
                        case 3: echo "Março"; break;
                        case 4: echo "Abril"; break;
                        case 5: echo "Maio"; break;
                        case 6: echo "Junho"; break;
                        case 7: echo "Julho"; break;
                        case 8: echo "Agosto"; break;
                        case 9: echo "Setembro"; break;
                        case 10: echo "Outubro"; break;
                        case 11: echo "Novembro"; break;
                        case 12: echo "Dezembro"; break;
    
    
    
    
    
    
    
    
    
                    }



                }
                
                





            }

        ?>
    </body>
</html>