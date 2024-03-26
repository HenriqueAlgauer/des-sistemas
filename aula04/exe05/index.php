<!--
    Desenvolva um código que solicite dois números e calcule o primeiro número elevado ao segundo número.Primeiramente utilize as funções de exponenciação disponíveis na linguagem PHP. Em um segundo momento,calcule a exponenciação através de estruturas de repetição (FOR, WHILE e DO-WHILE)
 -->

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe 05</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="num1">informe número: </label>
        <input type="text" name="num1"><br>
        
        <label for="num2">informe número: </label>
        <input type="text" name="num2"><br>

        <input type="submit" name="calculate">
        <br>
    </form>


    <?php
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num1 = (int) $num1;
        
        $num2 = $_POST['num2'];
        $num2 = (int) $num2;
        
        $res = pow($num1, $num2);

        echo "$num1^$num2 = ";
        for ($i = 1; $i <= $num2 - 1; $i++) {
            echo "$num1 x ";
        }
        echo " $num1";
        
        echo "<br>Resultado:  $res:";
    }
    ?>

</body>

</html>