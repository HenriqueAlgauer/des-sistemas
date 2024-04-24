<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
</head>

<body>
    <?php 
      if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')){
        session_start();

        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['sobrenome'] = $_POST['sobrenome'];
        $_SESSION['estadoCivil'] = $_POST['estado-civil'];
        $_SESSION['Formacao'] = $_POST['formacao'];

        echo "<a href='pg2.php'>Ir a pagina 02</a>";
      }else{
          ?>
    <form action="index.php?valor=enviado" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome">
        <br>

        <label for="sobrenome">sobrenome: </label>
        <input type="text" name="sobrenome">
        <br>

        <label for="estado-civil">estado-civil: </label>
        <input type="text" name="estado-civil">
        <br>

        <label for="formacao">Formação acedêmica: </label>
        <input type="text" name="formacao">
        <br>
        <input type="submit" value="enviar">

    </form>
    <?php 
        }   
    ?>
</body>

</html>