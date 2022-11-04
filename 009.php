<?php 
echo "9. Crie um algoritmo que pergunte ao usuário seu nome e sua idade. <br>Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.";
echo "<br>";



?>
<html>
    <body>
        <form method="POST">
            Nome: <input type="text" name="nome" placeholder="Digite o seu nome" required><br>
            Nascimento: <input type="date" name="nascimento" required><br>
            <input type="submit">

        </form>

    <?php

        if(!isset($_POST['nome']) || !isset($_POST['nascimento'])){echo "Preencha o formulário";} else 
        {



        
        $nome = $_POST['nome'];
        $nascimento = $_POST['nascimento'];
        $date = date('Y-m-d');

        $data_atual = new DateTime($date);
        $data_nascimento = new DateTime($nascimento);


        $diferenca = $data_atual->diff($data_nascimento);
        $diferenca_anos = $diferenca->days/365;
        $idade_arround = floor($diferenca_anos);

        if($diferenca_anos>= 18) {echo "O(a) Sr(a) $nome é <span style='color: red;'>MAIOR</span> de idade. Ele(a) possui $idade_arround anos.";}
        else {echo "O(a) Sr(a) $nome é <span style='color: red;'>MENOR</span> de idade. Ele(a) possui $idade_arround anos.";}
        
      

    }

        





    ?>
        
            <span style="color: red;">
                <br> <br> <br>
                
                OBS: modifiquei um pouco a questão para se tornar mais trabalhosa e educativa para mim.
            </span>

    </body>
</html>