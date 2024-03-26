<!-- 
    4. Devido ao ano eleitoral desenvolva um código que diga ao usuário se ele está apto a votar, tendo como premissa a sua idade. Ressalta-se que o ano atual deve ser obtido de maneira automática, ou seja, o usuárionão deve informar o ano atual, somente o ano de seu nascimento.
 -->

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe 04</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="ano">informe ano de nascimento: </label>
        <input type="text" name="ano"><br>

        <input type="submit" name="calculate">
        <br>
    </form>


    <?php
    if (isset($_POST['ano'])) {
        $ano = $_POST['ano'];
        $ano = (int) $ano;
        
        $anoAtual = 2024;
        $anoAtual = (int) $anoAtual;

        $idade = $anoAtual - $ano;

        if ($idade >= 18) {
            echo "Pode votar";
        } else {
            echo "Não pode votar";
        }
    }
    $registro = [["Nome" => "Jao", "Idade" => 14 ], ["Nome" => "Jao" , "Idade" => 83]];
    // Criar 
    ?>

</body>

</html>