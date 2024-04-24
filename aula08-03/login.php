<?php 
    session_start();
    

    if(isset($_POST['user']) and $_POST['senha']){
        if($_POST['user'] == "Professor" && $_POST['senha'] == 1234){
            $_SESSION['user'] = $_POST['user'];
            header('Location: clientes.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
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