<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 06</title>
</head>
<body>
    <header>
        <section>
            <h1>Informe os seus dados</h1>
        </section>
            
    </header>

    <form action="user.php" method="get">
        <label for="name">Nome: </label>
        <input type="text" placeholder="Digite seu nome" name="nome" id="idnome">
        <label for="sobrenome">Sobrenome: </label>
        <input type="text" placeholder="Digite seu sobrenome" name="sobrenome" id="idsobrenome">
        <input type="submit" name="enviar">
    </form>
</body>
</html>