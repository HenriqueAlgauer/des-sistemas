<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastrar</h1>

    <?php 
        $dados = filter_input_array(INPUT_GET, FILTER_DEFAULT);

        if(!empty($dados['cadastrarUser'])){
            $queryUsu = "INSERT INTO teste.seila (nome,estadoCivil,cpf, profissao) VALUES ('".$dados['nome']."',
            '".$dados['estadoCivil']."', '".$dados['cpf']."', '".$dados['profissao']."' )";

            $cadUsuario = $pdo->prepare($queryUsu);
            
        }
    ?>

    <form action="cadastro.php" method="get">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="nome"> <br><br>
        
        <label for="estadoCivil">Estado civil: </label>
        <select name="estadoCivil" id="estadoCivil">
            <option value="Casado">Casado</option>
            <option value="solteiro">Solteiro</option>
            <option value="divorciado">Divorciado</option>
            <option value="viuvo">Viuvo</option>
        </select>
        
        <label for="nome">CPF: </label>
        <input type="number" name="cpf" id="cpf" placeholder="CPF"> <br><br>
        
        <label for="pro">Profissao: </label>
        <input type="text" name="pro" id="pro" placeholder=""> <br><br>     
        
        <input type="submit" value="cadastro" name="cadastrarUser">
    </form>

</body>
</html>