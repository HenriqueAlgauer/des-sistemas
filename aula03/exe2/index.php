<!--
    2. Desenvolva um código onde deve ser informado os 3 lados de um triangulo. O código deve informar se o triangulo é equilátero, isósceles ou escaleno. (Dica: Se a soma de dois lados for maior que o terceiro lado, tem-se um triangulo).
 --> 

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe 2</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="lado1">informe lado 1: </label>
        <input type="text" name="lado1"><br>

        <label for="lado2">informe lado 2: </label>
        <input type="text" name="lado2"><br>

        <label for="lado3">informe lado 3: </label>
        <input type="text" name="lado3"><br>

        <input type="submit" name="calculate">
        <br>
    </form>


    <?php
    if (isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['lado3'])) {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];

        $lado1 = (float) $lado1;
        $lado2 = (float) $lado2;
        $lado3 = (float) $lado3;


        if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
            if ($lado1 == $lado2 && $lado2 == $lado3) {
                echo "O triangulo é equilátero";
            }
            elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                echo "O triangulo é isósceles";
            }
            else {
                echo "O triangulo é escaleno";
            }
        }
        
    } else {
        echo "Os lados não formam um triangulo.";
    }
    ?>

</body>

</html>