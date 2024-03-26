<!-- 
    3. Desenvolva um código onde deve ser informado um número, na sequência tal código deve mostrar na tela setal número é par ou ímpar. Utilize as estruturas condicionais IF, ELSE, ELSEIF, SWITCH e MATCH individualmente.
 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe 02</title>
</head>

<body>

    <?php

    function tabuada($num){
        $num = (int) $num;
        for($i = 0; $i <= 10; $i ++){
            echo "$num x" . " $i = " . $i*$num . "<br>";
        }
    }

    tabuada(7);
    echo "<br>";
    tabuada(9);

    ?>

</body>

</html>