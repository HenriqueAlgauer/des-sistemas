<?php 
    session_start();
    

    if(isset($_POST['user']) and $_POST['senha']){
        if($_POST['user'] == "Professor" && $_POST['senha'] == 1234){
            $_SESSION['user'] = $_POST['user'];
            header('Location: clientes.php');
        }
    }

    if(isset($_GET['erro'])){
        $erro = "É necessário logar para acessar o sistema";
    }
?>

<!DOCTYPE html> 
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>

    <div style="background-color: coral; margin: 10px">
        <?php 
            echo $erro ?? '';
        ?>
    </div>

    <form action="" method="post">
        <label for="user">Usuário </label>
        <input type="text" name="user">
        <br>

        <label for="senha">senha: </label>
        <input type="text" name="senha">
        <br>

        <input type="submit" value="enviar">

    </form>
</body>

</html>