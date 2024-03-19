<!-- 
    3. Desenvolva um código onde deve ser informado um número, na sequência tal código deve mostrar na tela setal número é par ou ímpar. Utilize as estruturas condicionais IF, ELSE, ELSEIF, SWITCH e MATCH individualmente.
 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe 03</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="num1">informe num 1: </label>
        <input type="text" name="num1"><br>

        <input type="submit" name="calculate">
        <br>
    </form>


    <?php
    if (isset($_POST['num1'])) {
        $num1 = $_POST['num1'];
        $num1 = (int) $num1;

        if ($num1 % 2 == 0) {
            echo "$num1 eh par.";
        } else {
            echo "$num1 eh ímpar.";
        }
    }
    ?>

</body>

</html>