<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe 03</title>
</head>
<body>
    <form method="post">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idades = [];

            for ($i = 1; $i <= 15; $i++) {
                $inputName = "idade_$i";
                $idade = isset($_POST[$inputName]) ? $_POST[$inputName] : '';
                $idades[] = $idade;
            }

            $maioresIdade = 0;
            $menoresIdade = 0;

            foreach ($idades as $idade) {
                if ($idade >= 18) {
                    $maioresIdade++;
                } else {
                    $menoresIdade++;
                }
            }

            echo "<p>Pessoas maiores de idade (18 anos ou mais): $maioresIdade</p>";
            echo "<p>Pessoas menores de idade: $menoresIdade</p>";
        } else {

            for ($i = 1; $i <= 15; $i++) {
                echo "<label for='idade_$i'>Idade $i:</label>";
                echo "<input type='number' id='idade_$i' name='idade_$i'><br>";
            }
            echo "<button type='submit'>Submit</button>";
        }
        ?>
    </form>
</body>
</html>