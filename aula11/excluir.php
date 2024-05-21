<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbaname=teste', 'root', '1234');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "ERRO => " . $erro->getMessage();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testar</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <a href="listar.php">
                    <li>Listar</li>
                </a>
                <br>
                <a href="cadastrar.php">
                    <li>Cadastrar</li>
                </a>
                <br>
                <a href="excluir.php">
                    <li>Excluir</li>
                </a>
                <br>
                <a href="editar.php">
                    <li>Editar</li>
                </a>
            </ul>
        </nav>
    </header>

    <h1>Excluir</h1>
    <?php 
        $queryUser = "SELECT nome, sobrenome, email FROM teste.usuario";
        $result = $pdo->prepare($queryUser);
        $result ->execute();

        if(!empty($_REQUEST['nome'])){
            $nome = $_REQUEST['nome'];
            $queryUserConsultaDelete = "SELECT * FROM teste.usuario WHERE nome = $nome";
            $resultConsultaDelete = $pdo->prepare($queryUserConsultaDelete);
            $resultConsultaDelete->execute();
            
            if($resultConsultaDelete->rowCOunt() != 0){
                $sqlDelete = "DELETE FROM teste.usuario WHERE nome = $nome";
                $resultDeletar = $pdo->prepare($sqlDelete);
                $resultDeletar->execute();
                header("Refresh:1");    
                
            }
        }
        if($result->rowCount() !=0){
    ?>

    <table>
        <thead>
            <tr>
                <th>nome</th>
                <th>sobrenome</th>
                <th>email</th>
                <th>excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($rowTable = $result->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td align="left"><?php echo $rowTable['nome']; ?></td>
                <td align="left"><?php echo $rowTable['sobrenome']; ?></td>
                <td align="left"><?php echo $rowTable['email']; ?></td>
                <td align="left">
                    <a href="excluir.php?id=<?php echo $rowTable['nome']?>">excluir</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php 
    }
    else{
        echo "<p>Não existem registros a serem listados</p>";
    }
    ?>


</body>

</html>