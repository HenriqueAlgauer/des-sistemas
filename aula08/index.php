    <?php 
        session_start();

        $_SESSION['usuario'] = "Professor";
        //echo "Essa página foi visualizada pelo {$_SESSION['usuario']}"
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
</head>
<body>
    <?php 
    $_SESSION['aula'] = "Linguagem PHP";
    $_SESSION['data'] = date('d/m/Y');
    $_SESSION['hora'] = time();
    
    echo "<br><a href='apresentacaoDados.php' >Clique para ir a página 02</a>";
    ?>
</body>
</html>