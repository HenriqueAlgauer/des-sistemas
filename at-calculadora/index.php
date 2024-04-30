<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

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
        width: 400px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 8px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(7.3px);
        -webkit-backdrop-filter: blur(7.3px);
    }

    .main {
        height: 800px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    h1 {
        color: #fff;
        font-weight: 300;
    }

    .div-form {
        width: 100%;
        display: flex;
        justify-content: space-evenly;
        gap: 10px;
    }

    .op1,
    .op2 {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
        font-size: 10px;
    }

    .op3 {
        display: flex;
        justify-content: space-between;
        gap: 10px;
    }

    input,
    .button {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .button {
        background-color: #f8f8f8;
        color: #333;
        border: none;
        cursor: pointer;
        font-size: 10px;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #e7e7e7;
    }

    #resultado {
        color: #fff;
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

<?php
// inicializa a mensagem, para não resultar em erro logo na abertura da página
$mensagem = "";

// verifica se o formulario foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // atribui valores que o usuário digitou
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    // confere se tem algum campo em branco
    if (!isset($num1) || $num1 === "" || !isset($num2) || $num2 === "") {
        $mensagem = "Preencha todos os campos !!";
    } else if (!is_numeric($num1) || !is_numeric($num2))  { // valida se digitou numeros
        $mensagem = "Por favor, insira somente números !!";
    } else {
        // faz o casting dos valores para garantir que não venha uma string
        $num1 = floatval($num1);
        $num2 = floatval($num2);
        $resultado = 0;
        switch ($operacao) {
            case 'add':
                $resultado = $num1 + $num2;
                break;
            case 'sub':
                $resultado = $num1 - $num2;
                break;
            case 'mult':
                $resultado = $num1 * $num2;
                break;
            case 'div':
                if ($num2 == 0) {
                    $mensagem = "Divisão por zero não é permitida.";
                    break;
                }
                $resultado = $num1 / $num2;
                break;
            case 'exp':
                $resultado = pow($num1, $num2);
                break;
            case 'raiz':
                $resultado = sqrt($num1 + $num2);
                break;
            case 'fat':
                if ($num1 < 0 || $num2 < 0) {
                    $mensagem = "Digite um numero inteiro";
                    break;
                }
                $soma = gmp_fact($num1 + $num2);
                $soma = floatval($soma);
                $resultado = $soma;
        }
        // verifica se a mensagem ja possui um valor 
        if (empty($mensagem)) {
            $mensagem = "Resultado: " . number_format($resultado, 2);
        }
    }
}
?>

<body>

    <div class="main">
        <form action="index.php" method="post">
            <h1>Calculadora</h1>
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
            </div>
            <div class="op3">
                <button type="submit" name="operacao" value="exp" class="button">Exponenciação</button>
                <button type="submit" name="operacao" value="raiz" class="button">Raiz Quadrada</button>
                <button type="submit" name="operacao" value="fat" class="button">Fatorial</button>
            </div>

            <!-- Exibe o resultado ou mensagem de erro para o usuário -->
            <div id="resultado"><?php echo $mensagem; ?></div>
        </form>
    </div>

    <footer>
        <p>Desenvolvimento de Sistemas - Henrique Machado Algauer</p>
    </footer>
</body>

</html>