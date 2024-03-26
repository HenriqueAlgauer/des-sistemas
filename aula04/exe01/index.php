<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe 01</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="num">informe número: </label>
        <input type="text" name="num"><br>

        <input type="submit" name="calculate">
        <br>
    </form>


    <?php
    if (isset($_POST['num'])) {
        $num = $_POST['num'];
        $num = (int) $num;
        $numeros = [];
        $contador = 0;

        for($i = 1; $i < $num; $i++){
            if($num % $i == 0){
                array_push($numeros, $i);
                $contador++;
            }
        }
        if ($contador == 1){
            echo "$num eh primo. <br>";
        } else {
            echo "$num não é primo. <br>";
        }

        echo "Multiplos de $num: \n";
        print_r($numeros);
    }
    ?>

</body>

</html>