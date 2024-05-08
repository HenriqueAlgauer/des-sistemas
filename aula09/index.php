<!DOCTYPE html>
<?php 
    setcookie("nome02cookie", "Teste02", time()+3600)
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 09</title>
</head>
<body>
    <?php 
        echo $_COOKIE['nome02cookie'];
    ?>
</body>
</html>