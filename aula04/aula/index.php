<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>
</head>

<body>

    <?php
    $i = 1;
    while ($i < 15) {
        echo "$i";
        $i++;
    }
    
    echo '<br><br>';

    $x = 15;
    do {
        echo "$x; <br>";
        $x--;
    } while ($x > 0);

    echo '<br>';

    $nomes = array('Gui', 'maria', 'Jão', 'joaquim', 'marcos');

    for($z = 0; $z <= 4; $z++){
        $item = $nomes[$z];
        echo "$item" . "<br>";
    }
    echo '<br>';

    $soma = 0;
    for($i = 1;$i <= 10;$i++){
        $soma += $i;
        echo "Soma: $soma <br>";
    }

    $soma = 0;
    $i = 0;
    while($i <= 10){
        $soma += $i;
        $i++;
    }
    echo '<br>';
    echo " Soma while: $soma";

    do{
        
    }while($i <=10);


    ?>
</body>

</html>