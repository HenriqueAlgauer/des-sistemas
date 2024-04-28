<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<style>
    body {
        text-align: center;
        background: rgb(0, 18, 36);
        background: linear-gradient(90deg, rgba(0, 18, 36, 1) 0%, rgba(107, 9, 121, 1) 53%, rgba(92, 0, 255, 1) 100%);
        margin: 0;
        font-family: Arial, sans-serif;
    }

    form {
        margin: 30px auto;
        padding: 20px;
        width: 300px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(7.3px);
        -webkit-backdrop-filter: blur(7.3px);
    }

    .div-form{
        display: flex;
    }

    .op1{
        display: flex;
        flex-direction: column;
        width: 40%;
    }
    .op2{
        display: flex;
        flex-direction: column;
        width: 40%;
    }
    
    .op3{
        display: flex;
    }

    input[type="text"],
    .button {
        width: calc(100% - 22px);
        padding: 10px;
        margin-top: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .button {
        background-color: #f8f8f8;
        color: #333;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #e7e7e7;
    }

    #result {
        color: #d6005f;
        font-size: 20px;
        margin-top: 20px;
    }

    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
        padding: 10px 0;
        background-color: #f9f9f9;
        border-top: 1px solid #e1e1e1;
    }
</style>

<body>
    <?php
    $mensagem = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operacao'];

        if (!isset($num1) || $num1 === "" || !isset($num2) || $num2 === "") {
            $mensagem = "Preencha todos os campos !!";
        } else if (!is_numeric($num1) || !is_numeric($num2)) {
            $mensagem = "Por favor, insira somente números !!";
        } else {
            $num1 = floatval($num1);
            $num2 = floatval($num2);
            $result = 0;
            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'sub':
                    $result = $num1 - $num2;
                    break;
                case 'mult':
                    $result = $num1 * $num2;
                    break;
                case 'div':
                    if ($num2 == 0) {
                        $mensagem = "Divisão por zero não é permitida.";
                        break;
                    }
                    $result = $num1 / $num2;
                    break;
                case 'exp':
                    $result = pow($num1, $num2);
                    break;
                case 'raiz':
                    $result = sqrt($num1 + $num2);
                    break;
                case 'fat':
                    $result = gmp_fact($num1 + $num2);
            }
            if (empty($mensagem)) {
                $mensagem = "Resultado: " . number_format($result, 2);
            }
        }
    }
    ?>

    <h1>Calculadora</h1>
    <form action="index.php" method="post">
        <input type="text" name="num1" placeholder="Número 1">
        <input type="text" name="num2" placeholder="Número 2">
        <div class="div-form">
            <div class="op1">
                <button type="submit" name="operacao" value="add" class="button">Adição</button>
                <button type="submit" name="operacao" value="sub" class="button">Subtração</button>
            </div>
            <div class="op2">
                <button type="submit" name="operacao" value="mult" class="button">Multiplicação</button>
                <button type="submit" name="operacao" value="div" class="button">Divisão</button>
            </div>
            <div class="op3">
                <button type="submit" name="operacao" value="exp" class="button">Exponenciação</button>
                <button type="submit" name="operacao" value="raiz" class="button">Raiz Quadrada</button>
                <button type="submit" name="operacao" value="fat" class="button">Fatorial</button>
            </div>
        </div>

        <div id="result"><?php echo $mensagem; ?></div>
    </form>
    <footer>
        <p>Desenvolvido para a disciplina de Desenvolvimento de Sistemas</p>
    </footer>
</body>

</html>