<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
</head>
<body>
    <header>
        <h1>Usuário cadastrado</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET['nome'];
            $sobrenome = $_GET['sobrenome'];    

            echo "Usuário cadastrado com sucesso !";
        ?>
    </main>
</body>
</html>