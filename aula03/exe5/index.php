<!-- 
    5. Desenvolva um código onde seja informado um número com o qual deve-se fazer operações matemáticas a escolha do usuário. Os resultados que devem ser obtidos são o dobro de um número, ou o cubo de um número ou a raiz quadrada de um número. Ressalta-se que deve ser utilizadas as estruturas SWITCH e MATCH. Quais as principais diferenças entre as estruturas de decisão?
 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe 05</title>
</head>

<body>
    <p>Digite: <br>
    1: para dobro; <br>
    2: para cubo; <br>
    3: para raiz; <br>
    </p>
    <form action="index.php" method="post">
        <label for="op">informe a operação: </label><br>
        <input type="text" name="op"><br>

        <label for="num">informe o numero: </label><br>
        <input type="text" name="num"><br>

        <input type="submit" name="calculate">
        <br>
    </form>


    <?php
    if (isset($_POST['op']) && isset($_POST['num'])) {
        $op = $_POST['op'];
        $op = (int) $op;
        $num = $_POST['num'];
        $num = (int) $num;
        
        switch ($op) {
            case 1:
                $resultado = $num * 2; 
                echo "O dobro eh $resultado.";
                break;
            case 2:
                $resultado = $num ** 3; 
                echo "O cubo eh $resultado.";
                break;
            case 3:
                $resultado = sqrt($num);
                echo "A raiz quadrada eh $resultado.";
                break;
            default:
                echo "Essa operação nao existe";
        }
    }
    ?>

</body>

</html>