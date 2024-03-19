<!--
1. Desenvolva um código em PHP que solicite três notas de um aluno. Em seguida tal programa deve calcular amédia das notas e informar o status do aluno, conforme o valor da sua média. Utilize as estruturascondicionais IF, ELSE, ELSEIF e MATCH individualmente.
• Se média < 4,0 – Aluno reprovado;
• Se média >= 4,0 e média < 6,0 – Aluno aguardando prova substitutiva;
• Se média >= 6,0 e média < 9,9 – Aluno aprovado;
• Se média igual a 10,0 – Aluno aprovado sem dificuldades;
• Por fim, informar o tipo da variável referente a média.
2. Desenvolva um código onde deve ser informado os 3 lados de um triângulo. O código deve informar se otriângulo é equilátero, isósceles ou escaleno. (Dica: Se a soma de dois lados for maior que o terceiro lado, tem-se um triângulo).
3. Desenvolva um código onde deve ser informado um número, na sequência tal código deve mostrar na tela setal número é par ou ímpar. Utilize as estruturas condicionais IF, ELSE, ELSEIF, SWITCH e MATCHindividualmente.
4. Devido ao ano eleitoral desenvolva um código que diga ao usuário se ele está apto a votar, tendo comopremissa a sua idade. Ressalta-se que o ano atual deve ser obtido de maneira automática, ou seja, o usuárionão deve informar o ano atual, somente o ano de seu nascimento.
5. Desenvolva um código onde seja informado um número com o qual deve-se fazer operações matemáticas aescolha do usuário. Os resultados que devem ser obtidos são o dobro de um número, ou o cubo de um númeroou a raiz quadrada de um número. Ressalta-se que deve ser utilizadas as estruturas SWITCH e MATCH. Quaisas principais diferenças entre as estruturas de decisão? -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="nota1">informe nota 1: </label>
        <input type="text" name="nota1"><br>

        <label for="nota2">informe nota 2: </label>
        <input type="text" name="nota2"><br>

        <label for="nota3">informe nota 3: </label>
        <input type="text" name="nota3"><br>

        <input type="submit" name="calculate">
        <br>
    </form>


    <?php
    if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $nota1 = (float) $nota1;
        $nota2 = (float) $nota2;
        $nota3 = (float) $nota3;

        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "Média = {$media} <br>";
        if($media < 4){
            echo'Aluno reprovado <br>';
        }
        else if($media >= 4 && $media <6){
            echo'Aluno aguardando substitutiva <br>';
        }
        else if($media >= 6 && $media < 9.9){
            echo 'Aluno aprovado <br>';
        }
        else if($media == 10){
            echo 'Aluno aprovado sem dificuldade <br>';
        }
    } else {
        echo "Informe todas as notas";
    }
    ?>

</body>

</html>